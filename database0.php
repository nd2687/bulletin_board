<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'bulletin_board';
try{
    $pdo = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
    die( "Connection failed: " . $e->getMessage());
}
?>
