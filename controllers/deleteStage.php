<?php

require_once 'models/deleteStage.php';
$id = $_POST['id'];
$deleteStage = new DeleteStage($id);
require 'views/deleteStage.php';
