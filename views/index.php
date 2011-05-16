<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('index.html.twig');

$pageTitle = 'Menu';
$template->display(array(
    'pageTitle' => $pageTitle,
    'session' => $session
));
?>
