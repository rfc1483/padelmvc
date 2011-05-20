<?php
require_once('bootstrap.php');
$template = $twig->loadTemplate('manageLeague.html.twig');
$pageTitle = 'League management';
$template->display(array(
    'pageTitle' => $pageTitle,
    'leagueData' => $leagueData
));
