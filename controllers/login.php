<?php

require_once 'models/login.php';
$login = new Login('teams');
$login->setSession();
require 'views/login.php';