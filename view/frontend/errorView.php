<?php $title = 'Error'; ?>

<?php ob_start(); ?>
<h1>Error</h1>
<p><?php echo $errorMessage; ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
