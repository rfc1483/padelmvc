<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('modifyDivision.html.twig');

$pageTitle = 'Division manager';
$template->display(array(
    'pageTitle' => $pageTitle,
    'division' => $divisionData
));