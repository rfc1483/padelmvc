<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('insertDivision.html.twig');

$pageTitle = 'Division inserted';
$template->display(array(
    'pageTitle' => $pageTitle
    
));
