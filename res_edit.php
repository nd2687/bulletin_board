<?php

require_once './init.php';

$type = (@$_POST['type']) ?: null;

$id = (@$_GET['id']) ?: null;
$thread_id = (@$_GET['thread_id']) ?: null;

if (empty($id) && empty($thread_id)) {
  $id = ($_POST['id']) ?: null;
  $thread_id = ($_POST['thread_id']) ?: null;
}

$res = new Response();
$rows = $res->show($id);

if ($type == 'patch') {
    $res->update($id, $thread_id);
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
          <td><input type="text" name="name" value="<?= $rows['name'] ?>"/></td>
        </tr>
        <tr>
          <th>内容</th>
          <td><textarea name="body"><?= $rows['body'] ?></textarea></td>
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
