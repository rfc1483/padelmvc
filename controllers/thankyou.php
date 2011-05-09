<?php

require_once 'models/thankyou.php';
$thankyou = new Thankyou();
$result = $thankyou->getThankyou();

require 'views/thankyou.php';