<?php

require_once 'models/login.php';
$login = new Login();
$login->setSession();
require 'views/login.php';