<?php

require 'class/thread.php';

$type = ($_POST['type']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type=='delete' && isset($id)) {
  $obj = new Thread();
  $obj->delete_thread($id);
}

?>
