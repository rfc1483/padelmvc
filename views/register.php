<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('register.html.twig');

$pageTitle = 'Register';
$template->display(array(
    'pageTitle' => $pageTitle
));
?>