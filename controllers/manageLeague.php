<?php
require_once 'models/manageLeague.php';
$leagueId = $_GET['id'];
$league = new League($leagueId);
$leagueData = $league->getLeague();
require 'views/manageLeague.php';
