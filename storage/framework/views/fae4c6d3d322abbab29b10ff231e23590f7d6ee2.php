<?php $__env->startSection('contenido'); ?>
            <h2 class="text-center text-uppercase">Formulario de registro de usuarios</h2>
            <?php echo Form::open(['route'=>'admin.store','method'=>'POST']); ?>

               <?php echo $__env->make('admin.userForm.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>