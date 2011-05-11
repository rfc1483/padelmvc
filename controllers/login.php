<?php

require_once 'models/login.php';
$login = new Login();
$login->setLogin();
$result = 'lib/loginForm.php'; 
require 'views/login.php';