<?php $title = 'Menu' ?>
<?php ob_start() ?>
<?php echo $result; ?>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>
