<h3 class="text-center" id="mensaje-enviado">Tu Comentario ya fue enviado</h3>

<form id="comment-form">
	<input type="hidden" id="post_id" value="<?php echo e($post->id); ?>">
	<?php echo Form::token(); ?>

	<div class="row">
	<?php if(Auth::check()): ?>
			<h3 class="text-center">Vas ha hacer tu comentario como <strong><?php echo e(Auth::user()->name); ?></strong></h3 class="text-center">
		<input type="hidden" id="name" value="<?php echo e(Auth::user()->name); ?>">
		<input type="hidden" id="email" value="<?php echo e(Auth::user()->email); ?>">
		<input type="hidden" id="website" value="<?php echo e(Auth::user()->email); ?>">
		<input type="hidden" id="path" value="<?php echo e(Auth::user()->path); ?>">
		<input type="hidden" id="id_rol" value="<?php echo e(Auth::user()->id_rol); ?>">
	<?php else: ?>

		<div class="col-md-4">
			<label for="name">Name*</label>
			<input id="name" name="name" type="text">
		</div>
		<div class="col-md-4">
			<label for="mail">E-mail*</label>
			<input id="email" name="email" type="text">
		</div>
		<div class="col-md-4">
			<label for="website">Website</label>
			<input id="website" name="website" type="text">
		</div>

		<input type="hidden" id="path" value="NULL">
		<input type="hidden" id="id_rol" value="3">
		
	<?php endif; ?>
		
	</div>
	<label for="comment">Comment*</label>
	<textarea id="comment" name="comment"></textarea>
	<button type="submit" id="submit-contact">
		Post Comment
	</button>
</form>
