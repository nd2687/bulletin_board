<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 05:46:59
         compiled from "./templates/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16726848995930f5c0f21ee7-61655657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127f3e5cc3f970f5c3faae0176449ba63cd383e5' => 
    array (
      0 => './templates/user_list.tpl',
      1 => 1496382408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16726848995930f5c0f21ee7-61655657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5930f5c0f41787_83768827',
  'variables' => 
  array (
    'UserLists' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930f5c0f41787_83768827')) {function content_5930f5c0f41787_83768827($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['UserLists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
 | <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</li>
    <?php } ?>
    </ul>
</body>
</html>
<?php }} ?>
