<?php

require_once('bootstrap.php');
$template = $twig->loadTemplate('divisionsManager.html.twig');
$pageTitle = 'Add division';
$template->display(array(
    'pageTitle' => $pageTitle,
    'stageId' => $stageId
));
