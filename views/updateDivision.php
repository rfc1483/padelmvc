<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('updateDivision.html.twig');

$pageTitle = 'Division updated';
$template->display(array(
    'pageTitle' => $pageTitle,
));
