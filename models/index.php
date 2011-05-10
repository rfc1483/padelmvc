<?php

session_start();

class Index {

    public function getIndex() {
        if (isset($_SESSION['userId'])) {
            $index = "Hola " . $_SESSION['userName'];
            $index .= "<br /><br />";
            $index .= "<a href='logout.php'>Log out</a>";
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
