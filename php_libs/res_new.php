<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$id = (@$_GET['id']) ?: null;
$type = (@$_POST['type']) ?: null;
$message = '';

if ($type == 'create') {
    if (isset($_POST['body'])) {
        $response = new Response();
        $response->create();
    } else {
        $message = "At least the text alone.";
    }
}


$smarty = new Smarty();

$smarty->assign("Message", $message);
$smarty->assign("ID", $id);
$smarty->display('res_new.tpl');

?>

