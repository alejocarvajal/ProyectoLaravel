<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('errors.alerts.errorUsers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <h2 class="text-center text-uppercase">Formulario de registro de usuarios</h2>
    <?php echo Form::open(['route'=>'admin.store','method'=>'POST','files'=>true]); ?>

       <?php echo $__env->make('admin.userForm.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>