<?php
require_once('bootstrap.php');

$template = $twig->loadTemplate('update.html.twig');

$pageTitle = 'Equipo actualizado';
$template->display(array(
    'pageTitle' => $pageTitle,
));
?>