<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('errors.alerts.errorUsers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<h1 class="text-center">Editar tu categoria</h1>
	<?php echo Form::model($cats,['route'=>['categorias.update',$cats->id],'method'=>'PUT']); ?>

		<?php echo $__env->make('categorias.forms.formCategories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>