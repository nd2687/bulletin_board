<?php

session_start();

require 'database.php';

$message = '';

if (isset($_SESSION['user_id'])) {

    $records = $pdo->prepare('SELECT id,email,password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if (count($results) > 0) {
        $user = $results;
    }
}


$type = (@$_POST['type']) ?: null;

if ($type == 'patch') {

    if (isset($_POST['password'])) {
        $stmt = $pdo->prepare("UPDATE users set email=:email, password=:password where id=:id");
        $email = ($_POST['email']) ?: $user['email'];
        $stmt->bindParam(':email', $email);
        $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);
        $stmt->bindParam(':id', $user['id']);
    } else {
        $stmt = $pdo->prepare("UPDATE users set email=:email where id=:id");
        $email = ($_POST['email']) ?: $user['email'];
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $user['id']);
    }

    if ($stmt->execute()):
        $message = 'Successfully updated your profile';
    else:
        $message = 'Sorry there must have been an issue updating your profile';
    endif;
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Change profile</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <?php if(isset($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Change profile</h1>
    <p>Do not change unchanged parameters.</p>

    <form action="user_edit.php" method="POST">

    <?php // confirmation ?>
        <input type="text" placeholder="Enter your email" name="email" value="<?php echo $user['email']; ?>">
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="hidden" name="type" value="patch" />
        <input type="submit">
    </form>
</body>
</html>
