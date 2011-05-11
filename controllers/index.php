<?php

session_start();

if (isset($_SESSION['userId'])) {
    $result = "Hola " . $_SESSION['userName'];
    $result .= "<br /><br />";
    $result .= "<a href='logout.php'>Log out</a>";
} else {
    $result = 'lib/indexMenu.php';
}
require 'views/index.php';
