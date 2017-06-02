<?php

session_start();

require_once './init.php';
require_once './libs/Smarty.class.php';


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

$smarty = new Smarty();
$smarty->assign("User", $user);
$smarty->assign("Message", $message);
$smarty->display('user_edit.tpl');

?>
