<form id="comment-form">
	<div class="row">
	<?php if(Auth::check()): ?>
		<h2 class="text-center">Vas a hacer tu comentario como <strong><?php echo e(Auth::user()->name); ?></strong></h3>
	<?php else: ?>
		<div class="col-md-4">
			<label for="name">Name*</label>
			<input id="name" name="name" type="text">
		</div>
		<div class="col-md-4">
			<label for="mail">E-mail*</label>
			<input id="mail" name="mail" type="text">
		</div>
		<div class="col-md-4">
			<label for="website">Website</label>
			<input id="website" name="website" type="text">
		</div>
	<?php endif; ?>
	</div>
	<label for="comment">Comment*</label>
	<textarea id="comment" name="comment"></textarea>
	<button type="submit" id="submit-contact">
		Post Comment
	</button>
</form>