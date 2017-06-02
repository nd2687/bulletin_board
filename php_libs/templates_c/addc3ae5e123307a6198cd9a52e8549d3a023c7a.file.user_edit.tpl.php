<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:28:35
         compiled from "./templates/user_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1542143745593105933176e9-99248084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addc3ae5e123307a6198cd9a52e8549d3a023c7a' => 
    array (
      0 => './templates/user_edit.tpl',
      1 => 1496384910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1542143745593105933176e9-99248084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Message' => 0,
    'User' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5931059333f7d6_05925454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5931059333f7d6_05925454')) {function content_5931059333f7d6_05925454($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

    <title>Change profile</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <?php if (($_smarty_tpl->tpl_vars['Message']->value)) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</p>
    <?php }?>

    <h1>Change profile</h1>
    <p>Do not change unchanged parameters.</p>

    <form action="user_edit.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email" value=<?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
>
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="hidden" name="type" value="patch" />
        <input type="submit">
    </form>

</body>
</html>
<?php }} ?>
