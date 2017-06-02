<?php

session_start();

require_once './php_libs/init.php';

$message = '';

if (isset($_SESSION['user_id'])) {

    $u = new User();
    $results = $u->get_by_id();

    $user = NULL;

    if (count($results) > 0) {
        $user = $results;
    }
}


$type = (@$_POST['type']) ?: null;

if ($type == 'patch') {

    $u = new User();
    $message = $u->update($user);

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
        <input type="text" placeholder="Enter your email" name="email" value="<?= $user['email'] ?>">
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="hidden" name="type" value="patch" />
        <input type="submit">
    </form>
</body>
</html>
