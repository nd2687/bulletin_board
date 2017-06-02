<?php

require_once './php_libs/init.php';

$type = ($_POST['type']) ?: null;
$response_id = ($_POST['response_id']) ?: null;
$id = ($_POST['id']) ?: null;

if ($type == 'delete' && isset($response_id)) {
    $res = new Response();
    $res->delete($response_id, $id);
}

?>
