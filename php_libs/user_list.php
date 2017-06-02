<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$smarty = new Smarty();
$user = new User();
$result = $user->get_enable_user_list();
$smarty->assign("UserLists", $result);
$smarty->display('user_list.tpl');

?>
