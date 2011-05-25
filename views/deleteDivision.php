<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('deleteDivision.html.twig');

$pageTitle = 'Division erased.';
$template->display(array(
    'pageTitle' => $pageTitle,
));