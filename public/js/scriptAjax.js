$(document).ready(function(){
	var myForm = $("#comment-form");
	var miMensaje =  $("#mensaje-enviado");
	miMensaje.hide();
	myForm.submit(function(e){
		e.preventDefault();
		myForm.fadeOut();
		miMensaje.fadeIn();
		var name = $(MyForm).find("#name").val();
		var email = $(MyForm).find("#email").val();
		var website = $(MyForm).find("#website").val();
		var comment = $(MyForm).find("#comment").val();
		var post_id = $(MyForm).find("#post_id").val();
	});
})