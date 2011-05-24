<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('stages.html.twig');

$pageTitle = 'Stages';
$template->display(array(
    'pageTitle' => $pageTitle,
    'empty' => $empty,
    'leagueId' => $leagueId,
    'stages' => $stagesData
));