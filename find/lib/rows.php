<?php

// Database connection data. 
require_once '../lib/database.php';
// Realizamos la consulta de los equipos
// Ordenandolos segun campo asc o desc
try {
    $criteria = "where 1";
    if ($name !== "") {
        $criteria .= " AND name1='$name' ";
        $criteria .= " OR name2='$name' ";
    }
    if ($surname !== "") {
        $criteria .= " AND surname1='$surname' ";
        $criteria .= " OR surname2='$surname' ";
    }
    
    $dbh = new Database();
    $sql = "SELECT * FROM team $criteria ORDER BY $campo $orden";
//    echo '<pre>';
//    print_r($sql);
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_ASSOC);
//    $row = $sth->fetch();
//    echo '<pre>';
//    print_r($row);
//mostramos los resultados mediante la consulta de arriba
    while ($row = $sth->fetch()) {
        $id = $row['id'];
        echo "<tr> \n";
//            echo "<td" . estiloCampo($campo, 'name1') . ">" . $row['name1'] . "</td> \n";
        echo "<td" . estiloCampo($campo, 'name1') . ">" . $row['name1'] . " " . $row['surname1'] . " / " . $row['name2'] . " " . $row['surname2'] . "</td> \n";
        echo "<td" . estiloCampo($campo, 'surname1') . ">" . $row['surname1'] . "</td> \n";
        echo "</tr> \n";
    }
} catch (PDOException $e) {
    echo "I'm sorry, Dave. I'm afraid I can't do that.";
    file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
    echo $e->getMessage();
}