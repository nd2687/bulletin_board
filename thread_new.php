<?php

require_once './init.php';

$type = (@$_POST['type']) ?: null;

if ($type == 'create') {

  if(empty($_POST['title']) || empty($_POST['body'])){
    header("Location: thread_new.php");
    exit();
  }

  $new_record = $pdo->prepare("INSERT INTO threads SET title=:title, body=:body, created_at=now()");
  $new_record->bindParam(':title', $_POST['title']);
  $new_record->bindParam(':body', $_POST['body']);
  $new_record->execute();

  header("Location: /");
}

?>

<!DOCTYPE>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <title>スレッド作成画面</title>

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <form method="post" action="thread_new.php">
        <table align="center">
            <tr>
              <th>タイトル</th>
              <td><input type="text" name="title" /></td>
            </tr>
            <tr>
              <th>内容</th>
              <td><textarea name="body"></textarea></td>
            </tr>
            <tr>
              <td><input type="hidden" name="type" value="create" /></td>
              <td><input type="submit" name="submit" value="作成" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
