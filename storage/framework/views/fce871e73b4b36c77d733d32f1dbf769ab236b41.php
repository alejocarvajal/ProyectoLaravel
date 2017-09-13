<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('errors.alerts.errorUsers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<h1>Agregar nuevas entradas</h1>
	<?php echo Form::open(['route'=>'post.store','method'=>'POST','files'=>'true']); ?>

		<?php echo $__env->make('post.forms.formPost', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>