<?php

require 'vendor/autoload.php';


class DbManager {

    //Database configuration
    private $dbhost = 'localhost';
    private $dbport = '27017';
    private $conn;

    function __construct(){
        //Connecting to MongoDB
        try {
            $mongo = new MongoDB\Client('mongodb://localhost:27017');

            $db = $mongo->selectDatabase('msgs');

            print_r($mongo->listDatabases());
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function getConnection() {
        return $this->conn;
    }

}
?>