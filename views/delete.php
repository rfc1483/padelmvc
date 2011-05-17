<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('delete.html.twig');

$pageTitle = 'Equipo eliminado.';
$template->display(array(
    'pageTitle' => $pageTitle,
));
?>