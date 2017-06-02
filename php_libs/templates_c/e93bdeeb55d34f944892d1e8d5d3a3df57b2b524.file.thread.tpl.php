<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:09:46
         compiled from "./templates/thread.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16308247585931012a364f27-85232856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e93bdeeb55d34f944892d1e8d5d3a3df57b2b524' => 
    array (
      0 => './templates/thread.tpl',
      1 => 1496383770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16308247585931012a364f27-85232856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Thread' => 0,
    'ID' => 0,
    'Responses' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5931012a384b11_01667373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5931012a384b11_01667373')) {function content_5931012a384b11_01667373($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8 />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title><<?php ?>?= $rows['title'] ?<?php ?>></title>
</head>
<body>
    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <p>作成日時:<?php echo $_smarty_tpl->tpl_vars['Thread']->value['created_at'];?>
</p>
    <span>Thread title:</span><h1><?php echo $_smarty_tpl->tpl_vars['Thread']->value['title'];?>
</h1>
    <b><?php echo $_smarty_tpl->tpl_vars['Thread']->value['body'];?>
</b>

    <p><a href="res_new.php?id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">書き込み</a></p>

    <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Responses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
        <hr />
        <p class="res-body"><?php echo $_smarty_tpl->tpl_vars['res']->value['body'];?>
</p>

        <p>
            名前:<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
 /
            投稿日時:<?php echo $_smarty_tpl->tpl_vars['res']->value['created_at'];?>
 /
            <a href="res_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
&thread_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">[編集]</a>
        </p>

        <form action="res_delete.php" method='post' onsubmit="return confirm('Are you sure?\nIt cannot be undone.');">
            <input type="hidden" name="type" value="delete" />
            <input type="hidden" name="response_id" value=<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
 />
            <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 />
            <input class="delete-button" type="submit" name="submit" value="削除" />
        </form>

    <?php } ?>
</body>
</html>
<?php }} ?>
