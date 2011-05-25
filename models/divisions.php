<?php

require_once('lib/database.php');

class Divisions {

    private $divisionsData;

    function __construct($stagesId) {
        $dbh = new Database();        
        $sql = "SELECT * FROM divisions WHERE stages_stage_id = '$stagesId'";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $this->divisionsData = $sth->fetchAll();
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

    public function __isset($property) {
        if (property_exists($this, $property)) {
            return true;
        } else {
            return false;
        }
    }

}
