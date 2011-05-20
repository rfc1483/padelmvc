<?php

class League {

    private $refresh;
    private $field;
    private $sort;
    private $name;
    private $criteria;
    private $sortName;
    private $sortYear;
    private $sortStatus;
    private $pageMode;
    private $flecha;
    private $header;
    private $headerClass;
    private $row;

    public function __construct() {
        if ($this->showTable() == true) {
            $this->getHeader();
            $this->getRows();
        }
    }

    // Shows the table if the form was send or if the ajax to change
    // the sort order is executed.
    public function showTable() {
        $this->getAjax();
        $this->pageMode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        if ($this->pageMode == 'find' || $this->refresh == true) {
            return true;
        } else {
            return false;
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

    private function getAjax() {
        // We get the values from the ajax script sent through the GET method
        $this->refresh = false;
        if (isset($_GET['field']) and isset($_GET['sort'])) {
            $this->refresh = true;
            extract($_GET);
            $this->field = $field;
            $this->sort = $sort;
            $this->name = $name;
            $this->year = $year;
            $this->status = $status;
        } else {
            //por defecto
            $this->field = 'name';
            $this->sort = 'ASC';
            $this->name = '';
            $this->year = '';
            $this->status = '';
        }
    }

    private function getHeader() {
        if ($this->pageMode == 'find') {
            $this->name = $_POST['name'];
            $this->year = $_POST['year'];
            $this->status = $_POST['status'];
        }

        $this->header = new Headers();
        // Defines two arrays, one for the field's names of the table
        // and the other for the headers.
        // Creating the columns
        $this->toogleSort();
        $this->headerClass = "encabezado_selec";
        print $foo = ($hour < 12) ? "Good morning!" : "Good afternoon!";
        
        $this->sortName = ($this->field == 'name') ? 
        if ($this->field == 'name') {
            $this->sortName = "'$this->field','$this->sort','$this->name'";
        } else if ($this->field == 'year') {
            $this->sortYear = "'$this->field','$this->sort','$this->name'";
        } else if ($this->field == 'status') {
            $this->sortStatus = "'$this->field','$this->sort','$this->name'";
        }
    }

    // Toogling the sort value
    private function toogleSort() {
        if ($this->sort == "DESC") {
            $this->sort = "ASC";
            $this->flecha = "img/arrow_down.gif";
        } else {
            $this->sort = "DESC";
            $this->flecha = "img/arrow_up.gif";
        }
    }

    // Compares the current field and the column's name
    // in the database.
    private function fieldStyle($_field, $_columna) {
        if ($_field == $_columna) {
            return " class=\"filas_selec\"";
        } else {
            return "";
        }
    }

    private function getRows() {
        // Database connection data. 
        require_once 'lib/database.php';
        // We do the team's query sorting by the 'asc' or 'desc' field
        try {
            $this->criteria = "where 1";
            if (!empty($this->name)) {
                $this->criteria .= " AND name='$this->name' ";
            }
            if (!empty($this->year)) {
                $this->criteria .= " AND year='$this->year' ";
            }
            if (!empty($this->status)) {
                $this->status .= " AND status='$this->status' ";
            }

            $this->showDataRow();
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->message . "\n", FILE_APPEND);
            echo $e->message;
        }
    }

    private function showDataRow() {
        $dbh = new Database();
        $sql = "SELECT * FROM league $this->criteria ORDER BY $this->field $this->sort";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $sth->fetchMode = PDO::FETCH_ASSOC;
        $this->row = $sth->fetchall();
    }

}

class sortCriteria {
                $this->sortStatus = "'$this->field','$this->sort','$this->name'";
    private
}

class Headers {

    private $name;
    private $year;
    private $status;

    function __construct() {
        $this->name = 'name';
        $this->year = 'year';
        $this->status = 'status';
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
