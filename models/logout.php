<?php

class Logout {

    public function logout() {
        session_start();

        unset($_SESSION['userId']);
        unset($_SESSION['userName']);

        header('Location: index.php');
        exit();
    }

}