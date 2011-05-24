<?php

require_once('lib/database.php');

class Stages {

    private $stagesData;

    function __construct($leagueId) {
        $dbh = new Database();
        $sql = "SELECT * FROM stages WHERE league_league_id = 'leagueId'";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $this->stagesData = $sth->fetchAll();        
    }

    public function getStagesData() {
        return $this->stagesData;
    }

}

?>