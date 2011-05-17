<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('modify.html.twig');

$pageTitle = 'Gestion de equipos';
$template->display(array(
    'pageTitle' => $pageTitle,
    'teamData' => $teamData
));
?>
