<?php /* Smarty version Smarty-3.1.15, created on 2017-06-02 06:25:10
         compiled from "./templates/res_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433366426593102c8ba2601-25061437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '971cc76d30b7fff3b91649e0a2824f33e27467e8' => 
    array (
      0 => './templates/res_new.tpl',
      1 => 1496384227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433366426593102c8ba2601-25061437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_593102c8bbb8d2_39153479',
  'variables' => 
  array (
    'Message' => 0,
    'ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593102c8bbb8d2_39153479')) {function content_593102c8bbb8d2_39153479($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>レス投稿画面</title>

</head>
<body>

    <div class="header">
        <a href="/">Bulletin Board</a>
    </div>

    <?php if (($_smarty_tpl->tpl_vars['Message']->value)) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</p>
    <?php }?>

    <form method="post" action="res_new.php">
          <table align="center">
                <tr>
                      <th>名前</th>
                      <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                      <th>内容</th>
                      <td><textarea name="body"></textarea></td>
                </tr>
                <tr>
                      <td>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
                            <input type="hidden" name="type" value="create" />
                      </td>
                      <td><input type="submit" name="submit" value="投稿" /></td>
                </tr>
          </table>
    </form>

</body>
</html>
<?php }} ?>
