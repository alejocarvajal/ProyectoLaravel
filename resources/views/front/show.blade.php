<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	{!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
<h1>Entrada: {{ $post->title }}</h1>
<span>{{ $post->created_at }}</span><br>
<strong>Categoria:</strong><a href="">{{ $post->categoria }}</a>
<br>
<strong>Etiquetas </strong>{{ $post->tags }}
<br>
<br>
{!! $post->content !!}
</body>
</html>
