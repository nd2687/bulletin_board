<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Change profile</title>
</head>
<body>
    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    {if ($Message)}<p>{$Message}</p>{/if}

    <h1>Change profile</h1>
    <p>Do not change unchanged parameters.</p>

    <form action="user_edit.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email" value={$User['email']}>
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="hidden" name="type" value="patch" />
        <input type="submit">
    </form>
</body>
</html>
