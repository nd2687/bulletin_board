<?php

session_start();

require_once './init.php';

$obj = new User();

if (isset($_SESSION['user_id'])) {

    $results = $obj->get_userinfo_by_id();

    $user = NULL;

    if( count($results) > 0) {
        $user = $results;
    }
}

$user_id = $_SESSION['user_id'];
$obj->unsubscribe($user_id);

require 'logout.php';

?>
