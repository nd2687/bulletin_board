<?php

require 'database.php';

$id = (isset($_GET['id']))? $_GET['id'] : null;
$type = (isset($_POST['type']))? $_POST['type'] : null;

$message = '';

if($type=='create') {
  $id = $_POST['id'];

  $name = $_POST['name'] ? $_POST['name'] : "名無し";

  if(empty($_POST['body'])){

      $message = "At least the text alone.";

  } else {

      $sql_res = $conn->prepare("INSERT INTO responses set thread_id = :id, name = :name, body = :body, created_at = now()");
      $sql_res->bindParam(':id', $id);
      $sql_res->bindParam(':name', $name);
      $sql_res->bindParam(':body', $_POST['body']);
      $sql_res->execute();

      header("Location: thread.php?id=" . $id);

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

    <?php if(!empty($message)): ?>
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
                            <input type="hidden" name="id" value="<?php echo $id;?>" />
                            <input type="hidden" name="type" value="create" />
                      </td>
                      <td><input type="submit" name="submit" value="投稿" /></td>
                </tr>
          </table>
    </form>

</body>
</html>
