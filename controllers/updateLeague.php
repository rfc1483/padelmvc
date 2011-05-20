<?php

require_once 'models/updateLeague.php';
$updateLeague = new UpdateLeague();
$updateLeague->setData();
$updateLeague->updateData();
require 'views/updateLeague.php';