<?php

require 'database.php';

$sql = "SELECT * FROM threads order by created_at desc";
$result = $pdo->query($sql);

$type = (isset($_POST['type']))? $_POST['type'] : null;
$id = (isset($_POST['id']))? $_POST['id'] : null;

if($type=='delete' && isset($id)) {

  $sql_thread = $pdo->prepare("DELETE FROM threads WHERE id=:id");
  $sql_thread->bindParam(':id', $id);
  $sql_thread->execute();

  header("Location: index.php");
}

?>
