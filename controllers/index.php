<?php

require_once 'models/index.php';
$index = new Index();
$result = $index->getIndex();

require 'views/index.php';
