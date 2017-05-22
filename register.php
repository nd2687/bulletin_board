<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: /");
}

require 'database.php';

$message = '';

if (isset($_POST['email']) && isset($_POST['password'])):

    // Enter the new user in the database
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':email', $_POST['email']);
    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password_hash);

    if ($stmt->execute()):
        $message = 'Successfully created new user';
    else:
        $message = 'Sorry there must have been an issue creating your account';
    endif;

endif;

?>

<!DOCTYPE html>
<html>
<head>

    <title>Register Below</title>

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

    <h1>Register</h1>
    <span>or <a href="login.php">login here</a></span>

    <form action="register.php" method="POST">

    <?php // confirmation ?>

        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="submit">
    </form>
</body>
</html>
