<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Login Below</title>
</head>
<body>
    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    {if ($Message)}<p>{$Message}</p>{/if}

    <h1>Login</h1>
    <span>or <a href="register.php">register here</a></span>

    <form action="login.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="and password" name="password">

        <input type="submit">
    </form>
</body>
</html>
