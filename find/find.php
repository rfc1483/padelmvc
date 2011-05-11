<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
$page_mode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
include 'lib/findForm.php';

//obtenemos valores que envió la funcion en
//Javascript mediante el metodo GET
$refresh = false;
if (isset($_GET['campo']) and isset($_GET['orden'])) {
    $refresh = true;
    $formData = array();
    $formData = $_GET;
    extract($formData);
    echo '<pre>';
    print_r($_GET);
    print_r($formData);
} else {
    //por defecto
    $campo = 'name1';
    $orden = 'ASC';
    $name = "";
    $surname = "";
}
if ($page_mode == 'find' || $refresh == true) {
    if ($page_mode == 'find') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
    }
    ?>
    <table cellspacing="0" cellpading="0">
        <tr class="encabezado">
            <?php
            //definimos dos arrays uno para los nombres de los campos de la tabla y
            //para los nombres que mostraremos en vez de los de la tabla -encabezados
            $campos = "name1,surname1";
            $cabecera = "Equipo,Apellido";

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
                if ($campos[$i] == $campo) {
                    //comparamos: si esta Descendente cambiamos a Ascendente
                    //y viceversa
                    if ($orden == "DESC") {
                        $orden = "ASC";
                        $flecha = "../img/arrow_down.gif";
                    } else {
                        $orden = "DESC";
                        $flecha = "../img/arrow_up.gif";
                    }
                    //si coinciden campo con el elemento del array
                    //la cabecera tendrá un color distinto
//                    $fieldsArray = array('campos'=> $campos[$i], 'orden' => $orden, '$name' => $name, 'surname' => $surname);
                    echo "<td class=\"encabezado_selec\" onclick=\"OrdenarPor('" . $campos[$i] . "','" . $orden . "','" . $name . "','" . $surname . "')\"><a><img src=\"" . $flecha . "\" />" . $cabecera[$i] . "</a></td> \n";
//                    echo "<td class=\"encabezado_selec\" onclick=\"OrdenarPor('$fieldsArray')\"><a><img src=\"" . $flecha . "\" />" . $cabecera[$i] . "</a></td> \n";
                } else {
                    //caso contrario la columna no tendra color
//                    echo "<td><a onclick=\"OrdenarPor('" . $campos[$i] . "','DESC')\">" . $cabecera[$i] . "</a></td> \n";
                    echo "<td onclick=\"OrdenarPor('" . $campos[$i] . "','DESC', '" . $name . "','" . $surname . "')\"><a >" . $cabecera[$i] . "</a></td> \n";
                }
                $i++;
            }
            ?>
        </tr>
        <?php

        // Esta funcion permite comparar el campo actual y el nombre de 
        // la columna en la base de datos
        function estiloCampo($_campo, $_columna) {
            if ($_campo == $_columna) {
                return " class=\"filas_selec\"";
            } else {
                return "";
            }
        }

        require 'lib/rows.php';
    }
    ?>
</table>
<br /><a href="index.php">Volver</a>