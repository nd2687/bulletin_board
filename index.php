<?php

session_start();

require_once './php_libs/init.php';

if (isset($_SESSION['user_id'])) {

    $u = new User();
    $results = $u->get_by_id();

    $user = NULL;

    if (count($results) > 0) {
        $user = $results;
    }
}

$thre = new Thread();
$rows = $thre->get_list();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>TOP</title>
</head>

<body>
    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <?php if( isset($user) ): ?>

        <br />Welcome <?= $user['email'] ?>
        <br /><br />You are successfully logged in!
        <br /><br />

        <a href="logout.php" onclick="return confirm('Are you sure?');">Logout?</a> /
        <a href="user_edit.php">Change profile?</a> /
        <a href="unsubscribe.php" onclick="return confirm('Are you sure?\nIt cannot be undone.');">Unsubscribe?</a> /
        <a href="user_list.php">User list</a>

    <?php else: ?>

        <h1>Please Login or Register</h1>
        <a href="login.php">Login</a> or
        <a href="register.php">Register</a>

    <?php endif; ?>

    <form method="post" action="index.php">

      <input type="text" placeholder="search word here." name="search_word">
      <input type="submit" value="検索">

    </form>

    <p><a href="thread_new.php">スレッド作成</a></p>

    <table align="center">
    <?php foreach( (array)@$rows as $thread ): ?>
        <tr>
            <td class="thread-list">
                <a href="thread.php?id=<?= $thread['id'] ?>"><?= $thread['title'] ?></a>
            </td>
            <td><?= $thread['created_at'] ?></td>
            <td>
                <form method='post' action='thread_delete.php' onsubmit="return confirm('Are you sure?\nIt cannot be undone.');">
                    <td><input type="hidden" name="type" value="delete" /></td>
                    <td><input type="hidden" name="id" value=<?php echo $thread['id'];?> /></td>
                    <td><input class="delete-button" type="submit" name="submit" value="削除" /></td>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
