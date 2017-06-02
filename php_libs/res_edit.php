<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$type = (@$_POST['type']) ?: null;

$id = (@$_GET['id']) ?: null;
$thread_id = (@$_GET['thread_id']) ?: null;

if (empty($id) && empty($thread_id)) {
  $id = ($_POST['id']) ?: null;
  $thread_id = ($_POST['thread_id']) ?: null;
}

$response = new Response();
$result = $response->show($id);

if ($type == 'patch') {
    $response->update($id, $thread_id);
}

$smarty = new Smarty();

$smarty->assign("Response", $result);
$smarty->assign("ThreadID", $thread_id);
$smarty->assign("ID", $id);
$smarty->display('res_edit.tpl');

?>
