<?php http_response_code(500); ?>
<?php ob_start(); ?>
<div class="container mt-5 text-center">
  <h1>Erreur Interne du Serveur</h1>
  <p><?php echo isset($message) ? $message : "Impossible d'afficher cette page"; ?></p>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
