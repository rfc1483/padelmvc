<?php

class Find {

    private $refresh;
    private $field;
    private $sort;
    private $name;
    private $surname;
    private $criteria;
    private $pageMode;
    private $flecha;

    public function writeTable() {
        $this->getAjax();
        $this->pageMode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        if ($this->pageMode == 'find' || $this->refresh == true) {
            $this->showHeaders();
            $this->showRows();
            echo "</table>";
            echo "<br /><a href='index.php'>Volver</a>";
        }
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

    private function getAjax() {
        // We get the values from the ajax script sent through the GET method
        $this->refresh = false;
        if (isset($_GET['field']) and isset($_GET['sort'])) {
            $this->refresh = true;
            extract($_GET);
            $this->field = $field;
            $this->sort = $sort;
            $this->name = $name;
            $this->surname = $surname;
        } else {
            //por defecto
            $this->field = 'name1';
            $this->sort = 'ASC';
            $this->name = '';
            $this->surname = '';
        }
    }

    private function showHeaders() {
        if ($this->pageMode == 'find') {
            $this->name = $_POST['name'];
            $this->surname = $_POST['surname'];
        }

        echo "<table cellspacing='0' cellpading='0'>";
        echo "<tr class='encabezado'>";

        // Defines two arrays, one for the field's names of the table
        // and the other for the headers.
        $fields = "name1";
        $header = "Equipo";

        // Separates the items with comma.
        $header = explode(",", $header);
        $fields = explode(",", $fields);

        // Number of elements on the first array.
        $numItemsArray = count($fields);

        // Creating the columns
        $this->showDataCell($fields, $header, $numItemsArray);
        echo "</tr>";
    }

    private function showDataCell($fields, $header, $numItemsArray) {
        $i = 0;
        while ($i <= $numItemsArray - 1) {

            // Comparing if the field column is the same as the current
            // array item.
            if ($fields[$i] == $this->field) {
                // Toogling the sort value
                if ($this->sort == "DESC") {
                    $this->sort = "ASC";
                    $flecha = "img/arrow_down.gif";
                } else {
                    $this->sort = "DESC";
                    $flecha = "img/arrow_up.gif";
                }
                $criteria = "'$fields[$i]','$this->sort','$this->name','$this->surname'";
                // If the field is the same as the current array item
                // the header will have a different color.
                echo "<td class=\"encabezado_selec\" onclick=sortBy($criteria)>";
                echo "<a><img src=\"" . $flecha . "\" />" . $header[$i] . "</a></td> \n";
            } else {
                // If isn't the same, the column won't have a different color
                echo "<td onclick=sortBy('$fields[$i]','$this->sort','$this->name','$this->surname')><a >" . $header[$i] . "</a></td> \n";
            }
            $i++;
        }
    }

    // This function compares the current field and the column's name
    // in the database.
    private function fieldStyle($_field, $_columna) {
        if ($_field == $_columna) {
            return " class=\"filas_selec\"";
        } else {
            return "";
        }
    }

    private function showRows() {
        // Database connection data. 
        require_once 'lib/database.php';
        // We do the team's query sorting by the 'asc' or 'desc' field
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

            $this->showDataRow();
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->message . "\n", FILE_APPEND);
            echo $e->message;
        }
    }

    private function showDataRow() {
        $name1 = 'name1';
        $surname1 = 'surname1';
        $name2 = 'name2';
        $surname2 = 'surname2';
        $dbh = new Database();
        $sql = "SELECT * FROM team $this->criteria ORDER BY $this->field $this->sort";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $sth->fetchMode = PDO::FETCH_ASSOC;

        //mostramos los resultados mediante la consulta de arriba
        while ($row = $sth->fetch()) {
            $id = $row['id'];
            echo "<tr onclick=\"document.location='modify.php?id=$id';\"> \n";
            echo "<td" . $this->fieldStyle($this->field, 'name1') . ">$row[$name1] $row[$surname1] / $row[$name2] $row[$surname2]</td> \n";
            echo "</tr> \n";
        }
    }

}

?>
