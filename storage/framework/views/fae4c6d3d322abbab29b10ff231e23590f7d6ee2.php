<?php $__env->startSection('contenido'); ?>
<?php if($errors->any()): ?>
	<div class="alert alert-danger">
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<?php echo e($error); ?>

			<br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</div>

<?php endif; ?>
            <h2 class="text-center text-uppercase">Formulario de registro de usuarios</h2>
            <?php echo Form::open(['route'=>'admin.store','method'=>'POST','files'=>true]); ?>

               <?php echo $__env->make('admin.userForm.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>