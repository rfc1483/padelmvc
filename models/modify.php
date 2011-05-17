<?php

class Team {

    private $teamId;
    private $team;

    public function __construct($teamId) {
        $this->teamId = $teamId;

        // Database connection data.
        require_once 'lib/database.php';

        try {
            $dbh = new Database();
            $sql = "SELECT * FROM team WHERE id = '$this->teamId'";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $this->team = $sth->fetch();
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
    }
    
    public function getTeam() {
        return $this->team;
    }

}
?>

<!--    private function showRows() {
        // Database connection data. 
        require_once 'lib/database.php';
// Realizamos la consulta de los equipos
// Ordenandolos segun campo asc o desc
        try {
            $this->criteria = "where 1";
            if (!empty($this->name)) {
                $this->criteria .= " AND name1='$this->name' ";
                $this->criteria .= " OR name2='$this->name' ";
            }
            if (!empty($this->surname)) {
                $this->criteria .= " AND surname1='$this->surname' ";
                $this->criteria .= " OR surname2='$this->surname' ";
            }
            $name1 = 'name1';
            $surname1 = 'surname1';
            $name2 = 'name2';
            $surname2 = 'surname2';
            $dbh = new Database();
            $sql = "SELECT * FROM team $this->criteria ORDER BY $this->campo $this->orden";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            //mostramos los resultados mediante la consulta de arriba
            while ($row = $sth->fetch()) {
                $id = $row['id'];
                echo "<tr onclick=\"document.location='modify.php?id=$id';\"> \n";
                echo "<td" . $this->estiloCampo($this->campo, 'name1') . ">$row[$name1] $row[$surname1] / $row[$name2] $row[$surname2]</td> \n";
                echo "</tr> \n";
            }
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
    }-->