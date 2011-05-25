<?php

require_once 'models/insertDivision.php';
$divisionData = $_POST;
$division = new Division($divisionData);
require_once 'views/insertDivision.php';
