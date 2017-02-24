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
<h1>BIENVENIDO</h1>
@foreach($posts as $post)
<h1>{!! $post->title !!}</h1>
<span>{!! $post->created_at !!}</span>
<p>{!! substr($post->content,0,220) !!}</p>
<a href="{{ route('post.show',$post->slug)}}">Ver Entrada</a>
<hr>
@endforeach
</body>
</html>