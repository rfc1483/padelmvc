<?php

class Stage {

    private $stage;

    public function __construct($stageId) {

        // Database connection data.
        require_once 'lib/database.php';

        try {
            $dbh = new Database();
            $sql = "SELECT * FROM stages WHERE stage_id = '$stageId'";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $this->stage = $sth->fetch();
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.<br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
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

?>
