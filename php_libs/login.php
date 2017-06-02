<?php

session_start();

if (!empty($_SESSION['user_id'])) {
    header("Location: /");
}

require_once './init.php';
require_once './libs/Smarty.class.php';

if (isset($_POST['email']) && isset($_POST['password'])):

    $user = new User();
    $results = $user->get_by_email();

    $message = '';

    // 0 or 1? before 0
    if ((int)@$results['unsubscribe_flag'] !== 0) {

        $message = 'This account is unsubscribed.';

    } else {

        if (count(@$results) > 0 && password_verify($_POST['password'], $results['password'])) {

            $_SESSION['user_id'] = $results['id'];
            header("Location: /");

        } else {

            $message = 'Sorry, those credentials do not match.';

        }

    }

endif;

$smarty = new Smarty();
$smarty->assign("Message", @$message);
$smarty->display('login.tpl');

?>
