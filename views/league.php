<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('league.html.twig');

$pageTitle = 'League';
$template->display(array(
    'pageTitle' => $pageTitle,
    'league' => $league
));
