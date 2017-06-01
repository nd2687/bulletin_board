<?php

require_once './init.php';

$u = new User();
$result = $u->get_enable_user_list();

?>

<!DOCTYPE html>
<html>
<head>

    <title>User list</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <h1>User list</h1>

    <ul>
    <?php while($user = $result->fetch() ): ?>
        <li><?= $user['id'] ?> | <?= $user['email'] ?></li>
    <?php endwhile; ?>
    </ul>
</body>
</html>
