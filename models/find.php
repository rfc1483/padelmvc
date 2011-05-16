<?php

class Find {

    private $refresh;
    private $formData = array();
    private $campo;
    private $orden;
    private $name;
    private $surname;
    private $criteria;
    private $pageMode;

    public function writeTable() {
        $this->getAjax();
        $this->pageMode = $this->getPageMode();
        $this->refresh = $this->getRefresh();
        if ($this->pageMode == 'find' || $this->refresh == true) {
            $this->showHeaders();
            $this->showRows();
            echo "</table>";
            echo "<br /><a href='index.php'>Volver</a>";
        }
    }

    public function getRefresh() {
        return $this->refresh;
    }

    public function getPageMode() {
        $this->pageMode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        return $this->pageMode;
    }

    private function getAjax() {
        //obtenemos valores que envió la funcion en
        //Javascript mediante el metodo GET
        $refresh = false;
        if (isset($_GET['campo']) and isset($_GET['orden'])) {           
            $this->refresh = true;
            $this->formData = $_GET;
            extract($this->formData);
            $this->campo = $campo;
            $this->orden = $orden;
            $this->name = $name;
            $this->surname = $surname;
        } else {
            //por defecto
            $this->campo = 'name1';
            $this->orden = 'ASC';
            $this->name = "";
            $this->surname = "";
        }
    }

    private function showHeaders() {
        if ($this->pageMode == 'find') {
            $this->name = $_POST['name'];
            $this->surname = $_POST['surname'];
        }

        echo "<table cellspacing='0' cellpading='0'>";
        echo "<tr class='encabezado'>";

        //definimos dos arrays uno para los nombres de los campos de la tabla y
        //para los nombres que mostraremos en vez de los de la tabla -encabezados
        $campos = "name1";
        $cabecera = "Equipo";

        //los separamos mediante coma
        $cabecera = explode(",", $cabecera);
        $campos = explode(",", $campos);

        //numero de elementos en el primer array
        $nroItemsArray = count($campos);
        //iniciamos variable i=0
        $i = 0;

        //mediante un bucle crearemos las columnas
        while ($i <= $nroItemsArray - 1) {
            //comparamos: si la columna campo es igual al elemento
            //actual del array
            if ($campos[$i] == $this->campo) {
                //comparamos: si esta Descendente cambiamos a Ascendente
                //y viceversa
                if ($this->orden == "DESC") {
                    $this->orden = "ASC";
                    $flecha = "img/arrow_down.gif";
                } else {
                    $this->orden = "DESC";
                    $flecha = "img/arrow_up.gif";
                }
                //si coinciden campo con el elemento del array
                //la cabecera tendrá un color distinto
                echo "<td class=\"encabezado_selec\" onclick=OrdenarPor('$campos[$i]','$this->orden','$this->name','$this->surname')><a><img src=\"" . $flecha . "\" />" . $cabecera[$i] . "</a></td> \n";
            } else {
                //caso contrario la columna no tendra color
                echo "<td onclick=OrdenarPor('$campos[$i]','$this->orden','$this->name','$this->surname')><a >" . $cabecera[$i] . "</a></td> \n";
            }
            $i++;
        }
        echo "</tr>";
    }

    // Esta funcion permite comparar el campo actual y el nombre de 
    // la columna en la base de datos
    private function estiloCampo($_campo, $_columna) {
        if ($_campo == $_columna) {
            return " class=\"filas_selec\"";
        } else {
            return "";
        }
    }

    private function showRows() {
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
                echo "<tr onclick=\"document.location='modify/index.php?id=$id';\"> \n";
                echo "<td" . $this->estiloCampo($this->campo, 'name1') . "onclick=\"../modify/index.php\">$row[$name1] $row[$surname1] / $row[$name2] $row[$surname2]</td> \n";
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
