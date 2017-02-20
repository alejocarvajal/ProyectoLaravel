<div class="form-group">
    <?php echo Form::open(['route'=>'categorias.store','method'=>'POST']); ?>

            <?php echo Form::token(); ?>

            <?php echo Form::label('name','Ingrese el nombre de la categoria'); ?>

            <?php echo Form::text('name',null,['class'=>'form-control']); ?>

        <br>
            <?php echo Form::submit('Enviar',['Class'=>'btn btn-primary']); ?>

     <?php echo Form::close(); ?>

</div>