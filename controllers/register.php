<?php

require_once 'models/register.php';
$register = new Register();
$page_mode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
$result = '';
if ($page_mode == 'register') {
    $register->setData();
    $register->insertData();
} else {
    $result = 'lib/registerForm.php';
    require 'views/register.php';
}


