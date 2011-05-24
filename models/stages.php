<?php

require_once('lib/database.php');

class Stages {

    private $stagesData;

    function __construct($leagueId) {
        $dbh = new Database();        
        $sql = "SELECT * FROM stages WHERE league_league_id = '$leagueId'";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $this->stagesData = $sth->fetchAll();
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        echo "Setting $property to value: $value <br />";
        if (property_exists($this, $property)) {
            echo "Setting $property to value: $value";
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

?>