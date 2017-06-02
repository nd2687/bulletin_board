<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:52:54
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12890554055930fe1742fcd3-25577159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1496386060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12890554055930fe1742fcd3-25577159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5930fe1744bca6_23304962',
  'variables' => 
  array (
    'user' => 0,
    'Lists' => 0,
    'thread' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930fe1744bca6_23304962')) {function content_5930fe1744bca6_23304962($_smarty_tpl) {?><!DOCTYPE html>
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

    <?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
        <br />Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>

        <br /><br />You are successfully logged in!
        <br /><br />

        <a href="logout.php" onclick="return confirm('Are you sure?');">Logout?</a> /
        <a href="user_edit.php">Change profile?</a> /
        <a href="unsubscribe.php" onclick="return confirm('Are you sure?\nIt cannot be undone.');">Unsubscribe?</a> /
        <a href="user_list.php">User list</a>
    <?php } else { ?>
        <h1>Please Login or Register</h1>
        <a href="login.php">Login</a> or
        <a href="register.php">Register</a>
    <?php }?>

 

    <form method="post" action="index.php">

      <input type="text" placeholder="search word here." name="search_word">
      <input type="submit" value="検索">

    </form>

    <p><a href="thread_new.php">スレッド作成</a></p>

    <table align="center">
    <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
        <tr>
            <td class="thread-list">
                <a href="thread.php?id=<?php echo $_smarty_tpl->tpl_vars['thread']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</a>
            </td>
            <td><<?php ?>?= $thread['created_at'] ?<?php ?>></td>
            <td>
                <form method='post' action='thread_delete.php' onsubmit="return confirm('Are you sure?\nIt cannot be undone.');">
                    <td><input type="hidden" name="type" value="delete" /></td>
                    <td><input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['thread']->value['id'];?>
 /></td>
                    <td><input class="delete-button" type="submit" name="submit" value="削除" /></td>
                </form>
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
<?php }} ?>
