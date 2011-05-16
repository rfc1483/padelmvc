<?php

require_once 'models/find.php';
$find = new Find();
//$pageMode = $find->getPageMode();
//$refresh = $find->getRefresh();
//$find->writeTable();
require 'views/find.php';
//$page_mode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
//if ($page_mode == 'register') {
//    $register->setData();
//    $register->insertData();
//} else {
//    require 'views/register.php';
//}
//$this->getAjax();
////if ($find->getPageMode() == 'find' || $find->getRefresh() == true) {
////    $this->showHeaders();
////    $this->showRows();
////}
////echo "</table>";
////echo "<br /><a href='index.php'>Volver</a>";
////require 'views/find.php';