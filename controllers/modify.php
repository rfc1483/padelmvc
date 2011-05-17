<?php
require_once 'models/modify.php';
$teamId = $_GET['id'];
$team = new Team($teamId);
$teamData = $team->getTeam();
require 'views/modify.php';
