<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$type = ($_POST['type']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type=='delete' && isset($id)) {
  $thread = new Thread();
  $thread->delete($id);
}

?>
