<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: /");
}

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    if ($_POST['password'] == $_POST['confirm_password']) {
        $user = new User();
        $message = $user->regist();
    } else {
        $message = 'password is not matched.';
    }
}

$smarty = new Smarty();
$smarty->assign("Message", @$message);
$smarty->display('register.tpl');

?>

