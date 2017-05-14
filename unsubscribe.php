<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

    $records = $pdo->prepare('SELECT id,email,password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if( count($results) > 0) {
        $user = $results;
    }
}

$sql = $pdo->prepare('UPDATE users set unsubscribe_flag = 1');
$sql->execute();

require 'logout.php';

?>
