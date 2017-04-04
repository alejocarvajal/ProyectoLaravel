<?php echo Form::open(['url'=>'contacto/send','method'=>'POST']); ?>

<div id="contact-form">
	<div class="row">
		<div class="col-md-4">
			<?php echo Form::label('name', 'Nombre:* '); ?>

      		<?php echo Form::text('name',null,['id'=>'name']); ?>

		</div>
		<div class="col-md-4">
			<?php echo Form::label('email', 'E-mail:* '); ?>

			<?php echo Form::text('email',null,['id'=>'email']); ?>

		</div>
		<div class="col-md-4">
			<?php echo Form::label('website', 'Website:* '); ?>

			<?php echo Form::text('website',null,['id'=>'website']); ?>

		</div>
	</div>
	<?php echo Form::label('comment', 'Tu mensaje:* '); ?>

	<?php echo Form::textarea('comment',null,['id'=>'comment']); ?>


	<?php echo Form::token(); ?>

	<button type="submit" id="submit-contact">
		<i class="fa fa-paper-plane"></i> Send Message
	</button>
</div>
<?php echo Form::close(); ?>