<?php

require_once 'models/delete.php';
$id = $_POST['id'];
$delete = new Delete($id);
require 'views/delete.php';