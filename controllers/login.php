<?php

require_once 'models/login.php';
$login = new Login('teams', 'team_id');
$login->setSession();
require 'views/login.php';