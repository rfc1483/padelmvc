<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('leagues.html.twig');

$pageTitle = 'Leagues';
$template->display(array(
    'pageTitle' => $pageTitle,
    'league' => $league
));
