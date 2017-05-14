<?php

require 'database.php';

$sql = "SELECT * FROM threads order by created_at desc";
$result = $pdo->query($sql);

$type = (isset($_POST['type']))? $_POST['type'] : null;
$response_id = (isset($_POST['response_id']))? $_POST['response_id'] : null;
$id = (isset($_POST['id']))? $_POST['id'] : null;

if($type=='delete' && isset($response_id)) {

  $sql_thread = "DELETE FROM responses WHERE id=" . $response_id;
  $result_thread = $pdo->query($sql_thread);

  header("Location: thread.php?id=" . $id);

}

?>
