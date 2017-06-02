<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8 />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>{$Thread['title']}</title>
</head>
<body>
    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <p>作成日時:{$Thread['created_at']}</p>
    <span>Thread title:</span><h1>{$Thread['title']}</h1>
    <b>{$Thread['body']}</b>

    <p><a href="res_new.php?id={$ID}">書き込み</a></p>

    {foreach from=$Responses item=res}
        <hr />
        <p class="res-body">{$res['body']}</p>

        <p>
            名前:{$res['name']} /
            投稿日時:{$res['created_at']} /
            <a href="res_edit.php?id={$res['id']}&thread_id={$ID}">[編集]</a>
        </p>

        <form action="res_delete.php" method='post' onsubmit="return confirm('Are you sure?\nIt cannot be undone.');">
            <input type="hidden" name="type" value="delete" />
            <input type="hidden" name="response_id" value={$res['id']} />
            <input type="hidden" name="id" value={$ID} />
            <input class="delete-button" type="submit" name="submit" value="削除" />
        </form>
    {/foreach}
</body>
</html>
