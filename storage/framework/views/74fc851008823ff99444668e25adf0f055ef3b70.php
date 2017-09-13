<?php $__env->startSection('contenido'); ?>
<h1>Formulario Subir Archivos</h1>
<?php echo Form::open(['url'=>'subir/storage','files'=>true]); ?>

	<?php echo Form::token(); ?>

	<?php echo form::file('image'); ?>

	<br>
	<?php echo form::submit('Enviar',['class'=>'btn btn-primary']); ?>

<?php echo form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>