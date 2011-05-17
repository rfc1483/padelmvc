<?php

require_once 'models/update.php';
$update = new Update();
$update->setData();
$update->updateData();
require 'views/update.php';
