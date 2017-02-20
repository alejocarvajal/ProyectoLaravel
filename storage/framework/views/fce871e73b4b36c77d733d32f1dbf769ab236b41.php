<?php $__env->startSection('contenido'); ?>
    <h1>Agregar nuevas entradas</h1>
    <?php echo Form::open(['route'=>'post.store','method'=>'POST']); ?>

    <?php echo Form::token(); ?>

    <?php echo Form::label('title','Titulo de la entrada'); ?>

    <?php echo Form::text('title',null,['class'=>'form-control']); ?>

    <?php echo Form::label('tags','Ingrese las etiquetas para la entrada'); ?>

    <?php echo Form::text('tags',null,['class'=>'form-control']); ?>


    <?php echo Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Ingrese el contenido de este espacio']); ?>

    <?php echo Form::select('cat_id',$cats,null,['class'=>'form-control','placeholder'=>'Seleccione la categoria de su post']); ?>

    <br>
    <?php echo Form::submit('Enviar',['Class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>