<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:23:06
         compiled from "./templates/res_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10359526159310438ec3be7-72084190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a10c4ce87e2c1260cc04e6d3e02686b67f91d1d' => 
    array (
      0 => './templates/res_edit.tpl',
      1 => 1496384586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10359526159310438ec3be7-72084190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59310438ee22a1_43322197',
  'variables' => 
  array (
    'Response' => 0,
    'ID' => 0,
    'ThreadID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59310438ee22a1_43322197')) {function content_59310438ee22a1_43322197($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>レス編集画面</title>

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <form method="post" action="res_edit.php">
      <table align="center">
        <tr>
          <th>名前</th>
          <td><input type="text" name="name" value=<?php echo $_smarty_tpl->tpl_vars['Response']->value['name'];?>
></td>
        </tr>
        <tr>
          <th>内容</th>
          <td><textarea name="body"><?php echo $_smarty_tpl->tpl_vars['Response']->value['body'];?>
</textarea></td>
        </tr>
        <tr>
          <td>
            <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 />
            <input type="hidden" name="thread_id" value=<?php echo $_smarty_tpl->tpl_vars['ThreadID']->value;?>
 />
            <input type="hidden" name="type" value="patch" />
          </td>
          <td><input type="submit" name="submit" value="更新" /></td>
        </tr>
      </table>
    </form>

</body>
</html>
<?php }} ?>
