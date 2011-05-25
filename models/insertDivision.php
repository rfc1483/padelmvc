<?php

require_once('lib/database.php');

class Division {

    private $divisionData;

    public function __construct(array $divisionData) {
        $this->divisionData = $this->filterParameters($divisionData);
        $this->insertData();
    }

    private function insertData() {
        try {
            extract($this->divisionData);
            $data = array(
                ':level' => $level,
                ':stageId' => $stageId
            );

            $dbh = new Database();
            $sql = "insert into divisions (level, stages_stage_id) 
                VALUES (:level, :stageId)";
            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.<br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
    }

    public function filterParameters($array) {

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
