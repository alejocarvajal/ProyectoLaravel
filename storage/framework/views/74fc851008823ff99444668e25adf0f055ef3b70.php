<h1>FORMULARIO SUBIR ARCHIVOS</h1>
<?php echo Form::open(['url'=>'storage','files'=>true]); ?>

	<?php echo Form::token(); ?>

	<?php echo Form::file('image'); ?>

	<?php echo Form::submit('enviar'); ?>

<?php echo Form::close(); ?>