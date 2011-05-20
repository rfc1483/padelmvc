<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('updateLeague.html.twig');

$pageTitle = 'League updated';
$template->display(array(
    'pageTitle' => $pageTitle,
));
?>