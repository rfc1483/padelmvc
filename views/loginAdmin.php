<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('loginAdmin.html.twig');

$pageTitle = 'Menu';
$template->display(array(
    'pageTitle' => $pageTitle,
    'login' => $login
));
?>