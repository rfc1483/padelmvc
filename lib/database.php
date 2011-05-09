<?php

class Database {

    private $hostname = 'localhost';
    private $dbname = 'padel';
    private $username = 'root';
    private $password = '';

    public function connect() {
        try {
            $db = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>