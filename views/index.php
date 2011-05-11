<?php $title = 'Menu' ?>
<?php ob_start() ?>
<?php include $result; ?>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>
