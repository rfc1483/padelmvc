<?php

class Logout {

    public function logout() {
        session_start();

        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);

        header('Location: index.php');
        exit();
    }

}