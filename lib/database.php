<?php

class Database extends PDO {

    private $dsn = 'mysql:dbname=padel;host=localhost';
    private $userName = 'root';
    private $password = '';

    public function __construct() {
        try {
            parent::__construct($this->dsn, $this->userName, $this->password);
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>