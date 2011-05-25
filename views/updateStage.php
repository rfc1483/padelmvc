<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('updateStage.html.twig');

$pageTitle = 'Stage updated';
$template->display(array(
    'pageTitle' => $pageTitle,
));
