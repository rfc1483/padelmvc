<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('deleteLeague.html.twig');

$pageTitle = 'League erased.';
$template->display(array(
    'pageTitle' => $pageTitle,
));