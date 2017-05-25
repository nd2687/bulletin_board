<?php

require 'database.php';

$id = (@$_GET['id']) ?: null;
$thread_id = (@$_GET['thread_id']) ?: null;

if (empty($id) && empty($thread_id)) {
  $id = ($_POST['id']) ?: null;
  $thread_id = ($_POST['thread_id']) ?: null;
}

$type = (@$_POST['type']) ?: null;

$sql_res = "SELECT * FROM responses where id = " . $id;
$result_thread = $pdo->query($sql_res);
$res = $result_thread->fetch();

if ($type == 'patch') {
  $sql_res = $pdo->prepare("UPDATE responses set name=:name, body=:body where id=:id");
  $sql_res->bindParam(':name', $_POST['name']);
  $sql_res->bindParam(':body', $_POST['body']);
  $sql_res->bindParam(':id', $id);
  $sql_res->execute();

  header("Location: thread.php?id=" . $thread_id);
}

?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>レス編集画面</title>
</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <form method="post" action="res_edit.php">
      <table align="center">
        <tr>
          <th>名前</th>
          <td><input type="text" name="name" value="<?= $res['name'] ?>"/></td>
        </tr>
        <tr>
          <th>内容</th>
          <td><textarea name="body"><?= $res['body'] ?></textarea></td>
        </tr>
        <tr>
          <td>
            <input type="hidden" name="id" value="<?= $id ?>" />
            <input type="hidden" name="thread_id" value="<?= $thread_id ?>" />
            <input type="hidden" name="type" value="patch" />
          </td>
          <td><input type="submit" name="submit" value="更新" /></td>
        </tr>
      </table>
    </form>

</body>
</html>
