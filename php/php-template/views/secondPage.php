<?php $title = 'Page 2 Template php'; ?>

<?php ob_start(); ?>

<h1>Ma page 2 !</h1>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>