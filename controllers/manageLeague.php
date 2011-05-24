<?php
require_once 'models/manageLeague.php';
$leagueId = $_GET['id'];
$league = new League($leagueId);
$leagueData = $league->league;
require 'views/manageLeague.php';
