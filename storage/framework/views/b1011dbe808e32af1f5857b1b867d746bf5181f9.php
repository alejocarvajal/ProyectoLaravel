<div class="form-group">
<?php echo Form::token(); ?>

<?php echo Form::label('name','Ingrese el nombre de la categoria'); ?>

<?php echo Form::text('name',null,['class'=>'form-control']); ?>

<?php echo Form::label('slug','Ingrese el slug de la categoria'); ?>

<?php echo Form::text('slug',null,['class'=>'form-control']); ?>

<br>
<?php echo Form::submit('Enviar',['class'=>'btn btn-info']); ?>

</div>