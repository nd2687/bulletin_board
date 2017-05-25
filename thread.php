<?php

require 'database.php';

$id = $_GET['id'];

$sql_thread = $pdo->prepare("SELECT * FROM threads where id = :id");
$sql_thread->bindParam(':id', $id);
$sql_thread->execute();
$thread = $sql_thread->fetch();

$sql_res = $pdo->prepare("SELECT * FROM responses where thread_id = :id order by created_at desc");
$sql_res->bindParam(':id', $id);
$sql_res->execute();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8 />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title><?= $thread['title'] ?></title>
</head>
<body>
    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <p>作成日時:<?= $thread['created_at'] ?></p>
    <span>Thread title:</span><h1><?= $thread['title'] ?></h1>
    <b><?= $thread['body'] ?></b>

    <p><a href="res_new.php?id=<?= $id ?>">書き込み</a></p>

    <?php while($res = $sql_res->fetch() ): ?>
        <hr />
        <p class="res-body"><?= $res['body'] ?></p>

        <p>
            名前:<?= $res['name'] ?> /
            投稿日時:<?= $res['created_at'] ?> /
            <a href="res_edit.php?id=<?= $res['id'] ?>&thread_id=<?= $id ?>">[編集]</a>
        </p>

        <form action="res_delete.php" method='post' onsubmit="return confirm('Are you sure?\nIt cannot be undone.');">
            <input type="hidden" name="type" value="delete" />
            <input type="hidden" name="response_id" value=<?= $res['id'] ?> />
            <input type="hidden" name="id" value=<?= $id ?> />
            <input class="delete-button" type="submit" name="submit" value="削除" />
        </form>

    <?php endwhile; ?>

</body>
</html>
