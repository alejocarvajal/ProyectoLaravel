<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<!--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>-->
	{!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
	{!! Html::style('css/jquery.bxslider.css')  !!}
	{!! Html::style('css/magnific-popup.css')  !!}
	{!! Html::style('css/owl.carousel.css')  !!}
    {!! Html::style('css/owl.theme.css')  !!}
	{!! Html::style('css/ticker-style.css')  !!}
	{!! Html::style('css/style.css')  !!}
</head>
<body>

	<!-- Container -->
	<div id="container">
		@yield('contenido')
	</div>
	<!-- End Container -->

	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('js/jquery.migrate.js') !!}
	{!! Html::script('js/jquery.bxslider.min.js') !!}
	{!! Html::script('js/jquery.magnific-popup.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/jquery.ticker.js') !!}
	{!! Html::script('js/jquery.imagesloaded.min.js') !!}
  	{!! Html::script('js/jquery.isotope.min.js') !!}
	{!! Html::script('js/owl.carousel.min.js') !!}
	{!! Html::script('js/retina-1.1.0.min.js') !!}
	{!! Html::script('js/script.js') !!}
</body>
</html>
