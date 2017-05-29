<?php

class Database {
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'bulletin_board';
    protected $pdo;

    function __construct() {
        try{
            $this->pdo = new PDO("mysql:host=$this->server;dbname=$this->database;", $this->username, $this->password);
        } catch(PDOException $e) {
          die( "Connection failed: ". $e->getMessage() );
        }
    }
}

?>
