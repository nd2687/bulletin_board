<?php

session_start();

require_once './init.php';
require_once './libs/Smarty.class.php';

$thread = new Thread();
$smarty = new Smarty();

if (isset($_SESSION['user_id'])) {

    $u = new User();
    $results = $u->get_by_id();

    $user = NULL;

    if (count($results) > 0) {
        $user = $results;
        $smarty->assign('user', $user);
    }
}

$result = $thread->get_list();

$smarty->assign("Lists", $result);
$smarty->display('index.tpl');

?>
