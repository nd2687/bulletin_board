<?php

require 'database.php';

$sql = "SELECT * FROM threads order by created_at desc";
$result = $pdo->query($sql);

$type = ($_POST['type']) ?: null;
$response_id = ($_POST['response_id']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type == 'delete' && isset($response_id)) {

  $stmt = $pdo->prepare("DELETE FROM responses WHERE id = :id");
  $stmt->bindParam(':id', $response_id);
  $stmt->execute();

  header("Location: thread.php?id=" . $id);

}

?>
