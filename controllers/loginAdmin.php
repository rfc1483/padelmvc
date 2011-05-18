<?php

require_once 'models/login.php';
$login = new Login('admin');
$login->setSession();
require 'views/loginAdmin.php';
