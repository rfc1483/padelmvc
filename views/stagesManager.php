<?php
echo $leagueId;
require_once('bootstrap.php');
$template = $twig->loadTemplate('stagesManager.html.twig');
$pageTitle = 'Add stage';
$template->display(array(
    'pageTitle' => $pageTitle,
    'leagueId' => $leagueId
));
