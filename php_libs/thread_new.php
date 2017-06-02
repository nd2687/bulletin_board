<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$type = (@$_POST['type']) ?: null;

if ($type == 'create') {

  if(empty($_POST['title']) || empty($_POST['body'])){
    header("Location: thread_new.php");
    exit();
  }

  $thread = new Thread();
  $thread->create();
}

$smarty = new Smarty();
$smarty->display('thread_new.tpl');

?>

