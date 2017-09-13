<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('errors.alerts.errorUsers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<h1 class="text-center">Formulario para agregar categorias</h1>
		<?php echo Form::open(['route'=>'categorias.store','method'=>'POST']); ?>

			<?php echo $__env->make('categorias.forms.formCategories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>