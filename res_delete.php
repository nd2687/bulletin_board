<?php

require_once './init.php';

$type = ($_POST['type']) ?: null;
$response_id = ($_POST['response_id']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type == 'delete' && isset($response_id)) {
    $obj = new Response();
    $obj->delete_response($response_id, $id);
}

?>
