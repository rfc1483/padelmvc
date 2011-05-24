<?php

require_once 'models/login.php';
$login = new Login('admin', 'admin_id');
$login->setSession();
require 'views/loginAdmin.php';
