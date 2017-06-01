<?php

require_once './init.php';

$id = (@$_GET['id']) ?: null;
$type = (@$_POST['type']) ?: null;
$message = '';

if ($type == 'create') {
    if (isset($_POST['body'])) {
        $res = new Response();
        $res->create();
    } else {
        $message = "At least the text alone.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>レス投稿画面</title>

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <?php if(isset($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form method="post" action="res_new.php">
          <table align="center">
                <tr>
                      <th>名前</th>
                      <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                      <th>内容</th>
                      <td><textarea name="body"></textarea></td>
                </tr>
                <tr>
                      <td>
                            <input type="hidden" name="id" value="<?= $id ?>" />
                            <input type="hidden" name="type" value="create" />
                      </td>
                      <td><input type="submit" name="submit" value="投稿" /></td>
                </tr>
          </table>
    </form>

</body>
</html>
