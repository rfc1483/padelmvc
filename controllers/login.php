<?php

require_once 'models/login.php';
$login = new Login('team');
$login->setSession();
require 'views/login.php';