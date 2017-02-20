<?php $__env->startSection('contenido'); ?>
    <h2 class="text-center text-uppercase">Formulario de registro de usuarios</h2>
    <?php echo $__env->make('categorias.form.formCategorias', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>