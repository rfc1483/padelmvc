<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('find.html.twig');

$pageTitle = 'Find';
$template->display(array(
    'pageTitle' => $pageTitle,
    'find' => $find
));
?>
