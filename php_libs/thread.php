<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$thread = new Thread();
$smarty = new Smarty();

$result = $thread->show();
$res_result = $thread->show_response($_GET['id']);
$id = $_GET['id'];

$smarty->assign("Thread", $result);
$smarty->assign("Responses", $res_result);
$smarty->assign("ID", $id);
$smarty->display('thread.tpl');

?>
