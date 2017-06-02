<?php

require_once './php_libs/init.php';

$type = ($_POST['type']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type=='delete' && isset($id)) {
  $thre = new Thread();
  $thre->delete($id);
}

?>
