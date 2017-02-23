<h1>Formulario Subir Archivos</h1>
<?php echo Form::open(['url'=>'storage','files'=>true]); ?>

	<?php echo Form::token(); ?>

	<?php echo form::file('image'); ?>

	<?php echo form::submit('Enviar'); ?>

<?php echo form::close(); ?>