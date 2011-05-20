<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('delete.html.twig');

$pageTitle = 'Team erased.';
$template->display(array(
    'pageTitle' => $pageTitle,
));
