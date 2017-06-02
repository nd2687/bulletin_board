<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:24:58
         compiled from "./templates/thread_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1196251351593104ba3b3107-39997655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '143b4dce10fc359df254f39c43c0c47281a82101' => 
    array (
      0 => './templates/thread_new.tpl',
      1 => 1496384630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196251351593104ba3b3107-39997655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_593104ba3d32a3_97431621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593104ba3d32a3_97431621')) {function content_593104ba3d32a3_97431621($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <title>スレッド作成画面</title>

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <form method="post" action="thread_new.php">
        <table align="center">
            <tr>
              <th>タイトル</th>
              <td><input type="text" name="title" /></td>
            </tr>
            <tr>
              <th>内容</th>
              <td><textarea name="body"></textarea></td>
            </tr>
            <tr>
              <td><input type="hidden" name="type" value="create" /></td>
              <td><input type="submit" name="submit" value="作成" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php }} ?>
