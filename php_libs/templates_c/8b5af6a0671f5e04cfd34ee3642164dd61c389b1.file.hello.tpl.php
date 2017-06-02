<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 05:07:58
         compiled from "./templates/hello.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7247234195930f2ae038da7-59980942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b5af6a0671f5e04cfd34ee3642164dd61c389b1' => 
    array (
      0 => './templates/hello.tpl',
      1 => 1496379915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7247234195930f2ae038da7-59980942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Name' => 0,
    'Fruits' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5930f2ae073da3_16004521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930f2ae073da3_16004521')) {function content_5930f2ae073da3_16004521($_smarty_tpl) {?><html>
<meta charset="utf-8">
こんにちは、<?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
さん。
<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Fruits']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <b><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</b></li>
<?php } ?>
</ul>
</html>
<?php }} ?>
