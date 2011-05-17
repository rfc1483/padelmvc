<?php

require_once 'models/delete.php';
$id = $_POST['id'];
echo $id;
$delete = new Delete($id);
//require 'views/delete.php';