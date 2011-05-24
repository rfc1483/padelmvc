<?php

require_once 'models/stages.php';
$leagueId = $_POST['id'];
$stages = new Stages($leagueId);
$stagesData = $stages->stagesData;
$empty = empty($stagesData);
require 'views/stages.php';
