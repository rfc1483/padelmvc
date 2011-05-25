<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('modifyStage.html.twig');

$pageTitle = 'Stage manager';
$template->display(array(
    'pageTitle' => $pageTitle,
    'stage' => $stageData
));
