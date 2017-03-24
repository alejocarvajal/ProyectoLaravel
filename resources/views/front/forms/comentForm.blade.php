<h3 class="text-center" id="mensaje-enviado">Tu comentario ya fue enviado</h3>
<form id="comment-form">
	<input type="hidden" id="post_id" value="{{ $post-id }}">
	<div class="row">
	@if (Auth::check())
		<h2 class="text-center">Vas a hacer tu comentario como <strong>{{ Auth::user()->name }}</strong></h3>
		<input type="hidden" value="{{ Auth::user()->name }}">
		<input type="hidden" value="{{ Auth::user()->email }}">
		<input type="hidden" value="{{ Auth::user()->name }}">
	@else
		<div class="col-md-4">
			<label for="name">Name*</label>
			<input id="name" name="name" type="text">
		</div>
		<div class="col-md-4">
			<label for="mail">E-mail*</label>
			<input id="mail" name="email" type="text">
		</div>
		<div class="col-md-4">
			<label for="website">Website</label>
			<input id="website" name="website" type="text">
		</div>
	@endif
	</div>
	<label for="comment">Comment*</label>
	<textarea id="comment" name="comment"></textarea>
	<button type="submit" id="submit-contact">
		Post Comment
	</button>
</form>