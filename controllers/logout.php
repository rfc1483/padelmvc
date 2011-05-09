<?php

require_once 'models/logout.php';
$logout = new Logout();
$result = $logout->logout();

require 'views/logout.php';