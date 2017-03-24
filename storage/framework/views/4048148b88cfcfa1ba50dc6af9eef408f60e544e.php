<div class="title-section">
	<h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
</div>
<?php echo $__env->make('front.forms.comentForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br>
<div class="title-section">
	<h1><span>Comentarios anteriores</span></h1>
	<br>
	<div class="row">
		<div class="col-md-2">
			<img src="<?php echo e(url('img/default-image.png')); ?>" class="img-responsive">
		</div>
		<div class="col-md-10">
			<strong>Nombre:</strong>
			<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
			<strong>Publicado el: </strong><span>Fecha </span><a href="#">Eliminar</a>
		</div>
	</div>
	<hr>
</div>