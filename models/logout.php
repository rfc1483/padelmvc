<?php

class Logout {

    public function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }

        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
    }

}