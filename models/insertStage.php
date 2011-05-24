<?php

require_once('lib/database.php');

class Stage {

    private $stageData;

    public function __construct(array $stageData) {
        $this->stageData = $this->filterParameters($stageData);
    }

    public function insertData() {
        try {
            echo '<pre>';
            echo $this->stageData;
            extract($this->stageData);
            $data = array(
                ':number' => $number,
                ':start_date' => $start_date,
                ':finish_date' => $finish_date,
                ':year' => $year,
                ':status' => $status,
                ':leagueId' => $leagueId
            );

            $dbh = new Database();
            $sql = "insert into stages (number, start_date, finish_date, year,
                status, league_league_id) 
                VALUES (:number, :start_date, :finish_date, :year, :status, :leagueId)"; 
            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
//        header('Location: thankyou.php');
    }

    public

    function filterParameters($array) {

        // Check if the parameter is an array
        if (is_array($array)) {
            // Loop through the initial dimension
            foreach ($array as $key => $value) {
                // Check if any nodes are arrays themselves
                if (is_array($array[$key]))
                // If they are, let the function call itself over that particular node
                    $array[$key] = $this->filterParameters($array[$key]);

                // Check if the nodes are strings
                if (is_string($array[$key])) {
                    // If they are, perform the real escape function over the selected node
                    $array[$key] = mysql_real_escape_string($array[$key]);
                    $array[$key] = trim($array[$key]);
                }
            }
        }
        // Check if the parameter is a string
        if (is_string($array))
        // If it is, perform a  mysql_real_escape_string on the parameter
            $array = mysql_real_escape_string($array);

        // Return the filtered result
        return $array;
    }

}
