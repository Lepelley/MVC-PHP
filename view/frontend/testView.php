<?php $title = 'Test module'; ?>

<?php ob_start(); ?>
<h1>Hello world !</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ea repellat iste doloremque excepturi et cupiditate eaque odit, dolorem, sapiente, magni fugiat eius perferendis recusandae voluptatem quis voluptatibus. Doloremque, amet?</p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
