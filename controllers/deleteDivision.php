<?php

require_once 'models/deleteDivision.php';
$id = $_POST['id'];
$deleteDivision = new DeleteDivision($id);
require 'views/deleteDivision.php';