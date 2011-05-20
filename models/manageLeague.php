<?php

class League {

    private $leagueId;
    private $league;

    public function __construct($leagueId) {
        $this->leagueId = $leagueId;

        // Database connection data.
        require_once 'lib/database.php';

        try {
            $dbh = new Database();
            $sql = "SELECT * FROM league WHERE id = '$this->leagueId'";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $this->league = $sth->fetch();
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
    }
    
    public function getLeague() {
        return $this->league;
    }

}
?>
