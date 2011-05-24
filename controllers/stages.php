<?php

require_once 'models/stages.php';
$leagueId = $_POST['id'];
$stages = new Stages($leagueId);
$stagesData = $stages->getStagesData();
echo $stagesData.league_id;
$empty = empty($stages_data);
require 'views/stages.php';
