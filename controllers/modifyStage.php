<?php
require_once 'models/modifyStage.php';
$stageId = $_GET['stageId'];
$stage = new Stage($stageId);
$stageData = $stage->stage;
require 'views/modifyStage.php';
