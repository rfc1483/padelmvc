<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('login.html.twig');

$pageTitle = 'Menu';
$template->display(array(
    'pageTitle' => $pageTitle,
    'login' => $login
));
?>
