<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('divisions.html.twig');

$pageTitle = 'Divisions';
$template->display(array(
    'pageTitle' => $pageTitle,
    'empty' => $empty,
    'stageId' => $stageId,
    'divisions' => $divisionsData
));