<?php $title = 'Page admin'; ?>

<?php ob_start(); ?>

<h1>Ma page Admin</h1>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>