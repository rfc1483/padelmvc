<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('deleteStage.html.twig');

$pageTitle = 'Stage erased.';
$template->display(array(
    'pageTitle' => $pageTitle,
));