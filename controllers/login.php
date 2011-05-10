<?php

require_once 'models/login.php';
$login = new Login();
$login->setLogin();
$result = 'lib/loginForm.php'; 
//$result = $login->getLogin();

require 'views/login.php';