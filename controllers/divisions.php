<?php

require_once 'models/divisions.php';
$stageId = $_POST['stageId'];
$divisions = new Divisions($stageId);
$divisionsData = $divisions->divisionsData;
$empty = empty($divisionsData);
require 'views/divisions.php';
