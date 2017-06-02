<?php

require_once './init.php';
require_once './libs/Smarty.class.php';

$type = ($_POST['type']) ?: null;
$response_id = ($_POST['response_id']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type == 'delete' && isset($response_id)) {
    $response = new Response();
    $response->delete($response_id, $id);
}

?>
