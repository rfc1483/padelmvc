<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('insertStage.html.twig');

$pageTitle = 'Register';
$template->display(array(
    'pageTitle' => $pageTitle
    
));
