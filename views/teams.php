<?php ob_start(); ?>

<?php var_dump($teams); ?>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>