<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('logout.html.twig');

$pageTitle = 'Logout';
$template->display(array(
    'result' => $result
));
?>