<?php

require_once './init.php';

$type = ($_POST['type']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type=='delete' && isset($id)) {
  $obj = new Thread();
  $obj->delete_thread($id);
}

?>
