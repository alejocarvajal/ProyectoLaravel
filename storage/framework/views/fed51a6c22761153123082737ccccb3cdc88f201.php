<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('errors.alerts.errorUsers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<h1>Formulario editar</h1>
	<?php echo Form::model($usuario,['route'=>['admin.update',$usuario->id],'method'=>'PUT','files'=>true]); ?>

		<?php echo $__env->make('admin.userForm.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>