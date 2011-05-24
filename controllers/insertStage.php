<?php
require_once 'models/insertStage.php';
$stageData = $_POST;
$stage = new Stage($stageData);

