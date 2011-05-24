<?php

require_once('bootstrap.php');

$template = $twig->loadTemplate('thankyou.html.twig');

$pageTitle = 'Thank you';
$template->display(array(
    'pageTitle' => $pageTitle
));
?>