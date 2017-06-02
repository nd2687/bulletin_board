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
    {foreach from=$UserLists item=user}
        <li>{$user['id']} | {$user['email']}</li>
    {/foreach}
    </ul>
</body>
</html>
