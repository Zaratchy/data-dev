<?php $title = "Home Template php"; ?>

<?php ob_start(); ?>

<h1>Ma super page d'accueil</h1>


<?php $content = ob_get_clean(); ?>

<?php require('template.php');