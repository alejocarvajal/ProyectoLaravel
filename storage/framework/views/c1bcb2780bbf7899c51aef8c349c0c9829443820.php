<div class="form-group">
<?php echo Form::token(); ?>

<?php echo Form::label('title','Ingrese el Titulo de la Entrada'); ?>

<?php echo Form::text('title',null,['class'=>'form-control']); ?>


<?php echo Form::label('tags','Ingrese etiquetas para la Entrada'); ?>

<?php echo Form::text('tags',null,['class'=>'form-control']); ?>


<?php echo Form::label('slug','Ingrese slug para la Entrada'); ?>

<?php echo Form::text('slug',null,['class'=>'form-control']); ?>

<?php echo Form::file('image'); ?>


<?php echo Form::textarea('content',null,['class'=>'form-control ckeditor','placeholder'=>'Ingrese el contenido en este espacio']); ?>



<?php echo Form::select('cat_id',$cats,null,['class'=>'form-control','placeholder'=>'Seleccione la categoria de su Post']); ?>

<br>
<?php echo Form::submit('Enviar',['class'=>'btn btn-primary']); ?>

</div>