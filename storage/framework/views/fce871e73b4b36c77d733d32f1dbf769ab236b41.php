<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('errors.alerts.errorUsers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<h1>Agregar nuevas entradas</h1>
	<?php echo Form::open(['route'=>'post.store','method'=>'POST','files'=>'true']); ?>

		<?php echo Form::label('title','Ingrese el Titulo de la Entrada'); ?>

		<?php echo Form::text('title',null,['class'=>'form-control']); ?>


		<?php echo Form::label('tags','Ingrese etiquetas para la Entrada'); ?>

		<?php echo Form::text('tags',null,['class'=>'form-control']); ?>


		<?php echo Form::label('slug','Ingrese slug para la Entrada'); ?>

		<?php echo Form::text('slug',null,['class'=>'form-control']); ?>

		<?php echo Form::file('image'); ?>



		<?php echo Form::textarea('content',null,['class'=>'form-control ckeditor','placeholder'=>'Ingrese el contenido en este espacio']); ?>



		<?php echo Form::select('cat_id',$cats,null,['class'=>'form-control','placeholder'=>'Seleccione la categoria de su Post']); ?>


		<?php echo Form::submit('Enviar',['class'=>'btn btn-primary']); ?>


	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>