<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:36:01
         compiled from "./templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7161021759310751bc31b5-11597129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbf1e8fe3fd40b5d5d98f1481941b0b65780f26' => 
    array (
      0 => './templates/register.tpl',
      1 => 1496385318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7161021759310751bc31b5-11597129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59310751be1519_42882463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59310751be1519_42882463')) {function content_59310751be1519_42882463($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

    <title>Register Below</title>

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

    <h1>Register</h1>
    <span>or <a href="login.php">login here</a></span>

    <form action="register.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">

        <input type="submit">
    </form>

</body>
</html>
<?php }} ?>
