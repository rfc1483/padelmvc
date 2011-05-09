<?php

class Index {

    public function getIndex() {
        if (isset($_SESSION['user_id'])) {
            $index = "Hola" . $_SESSION['user_name'];
            $index .= "<br /><br />";
            $index .= "<a href='logout.php'>Log out</a>;";
        } else {
            $index = "
        Registro <a href='register.php'>aqui</a> <br />
        Autentificacion <a href='login.php'>aqui</a> <br />
        Busqueda <a href='find/view_index.php'>aqui</a>
        ";
        }
        return $index;
    }

}
