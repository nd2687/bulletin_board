<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:33:45
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1019731768593106c93d5858-51203464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1496385139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019731768593106c93d5858-51203464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_593106c93f5d93_49354437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593106c93f5d93_49354437')) {function content_593106c93f5d93_49354437($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

    <title>Login Below</title>
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

    <h1>Login</h1>
    <span>or <a href="register.php">register here</a></span>

    <form action="login.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="and password" name="password">

        <input type="submit">
    </form>

</body>
</html>
<?php }} ?>
