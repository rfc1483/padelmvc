<?php
require_once 'models/modifyDivision.php';
$divisionId = $_GET['divisionId'];
$division = new Division($divisionId);
$divisionData = $division->division;
require 'views/modifyDivision.php';