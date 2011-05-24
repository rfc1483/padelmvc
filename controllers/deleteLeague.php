<?php

require_once 'models/deleteLeague.php';
$id = $_POST['id'];
$delete = new DeleteLeague($id);
require 'views/deleteLeague.php';
