<?php

require_once './init.php';

$type = ($_POST['type']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type=='delete' && isset($id)) {
  $thre = new Thread();
  $thre->delete($id);
}

?>
