<?php

class Find {

    private $refresh;
    private $field;
    private $sort;
    private $name;
    private $surname;
    private $criteria;
    private $pageMode;

    public function writeTable() {
        $this->getAjax();
        $pageMode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        $this->setPageMode($pageMode);
        if ($this->getPageMode() == 'find' || $this->getRefresh() == true) {
            $this->showHeaders();
            $this->showRows();
            echo "</table>";
            echo "<br /><a href='index.php'>Volver</a>";
        }
    }

    private __get($key) {
        return $this->key;
    }
    private function getRefresh() {
        return $this->refresh;
    }

    private function setPageMode($page_mode) {
        $this->pageMode = $page_mode;
    }

    private function setRefresh($refresh) {
        $this->refresh = $refresh;
    }

    private function getPageMode() {
        return $this->pageMode;
    }

    private function getName() {
        return $this->name;
    }

    private function getSurname() {
        return $this->surname;
    }

    public function setField($field) {
        $this->field = $field;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    private function getAjax() {
        // We get the values from the ajax script sent through the GET method
        $this->refresh = false;
        if (isset($_GET['field']) and isset($_GET['sort'])) {
            $this->setRefresh(true);
            extract($_GET);
            $this->setField($field);
            $this->setSort($sort);
            $this->setName($name);
            $this->setSurname($surname);
        } else {
            //por defecto
            $this->setField('name1');
            $this->setSort('ASC');
            $this->setName('');
            $this->setSurname('');
        }
    }

    private function showHeaders() {
        if ($this->getPageMode() == 'find') {
            $this->getName() = $_POST['name'];
            $this->getSurname() = $_POST['surname'];
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
        $nroItemsArray = count($fields);
        $i = 0;

        // Creating the columns
        while ($i <= $nroItemsArray - 1) {
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
        echo "</tr>";
    }

    // Esta funcion permite comparar el field actual y el nombre de 
    // la columna en la base de datos
    private function estilofield($_field, $_columna) {
        if ($_field == $_columna) {
            return " class=\"filas_selec\"";
        } else {
            return "";
        }
    }

    private function showRows() {
        // Database connection data. 
        require_once 'lib/database.php';
// Realizamos la consulta de los equipos
// sortandolos segun field asc o desc
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
            $sql = "SELECT * FROM team $this->criteria ORDER BY $this->field $this->sort";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            //mostramos los resultados mediante la consulta de arriba
            while ($row = $sth->fetch()) {
                $id = $row['id'];
                echo "<tr onclick=\"document.location='modify.php?id=$id';\"> \n";
                echo "<td" . $this->fieldStyle($this->field, 'name1') . ">$row[$name1] $row[$surname1] / $row[$name2] $row[$surname2]</td> \n";
                echo "</tr> \n";
            }
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
            echo $e->getMessage();
        }
    }

}

?>
