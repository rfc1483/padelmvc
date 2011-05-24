<?php
require_once 'models/modify.php';
$teamId = $_GET['id'];
$stage = new Stage($teamId);
$teamData = $team->getTeam();
require_once 'views/modify.php';
