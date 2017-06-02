<?php

require_once './php_libs/init.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: /");
}

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])):
    $user = new User();
    $message = $user->regist();
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
