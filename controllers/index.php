<?php
session_start();

if (isset($_SESSION['userId'])) {
    $session = $_SESSION;
} else {
    $session = null;
}
require 'views/index.php';
