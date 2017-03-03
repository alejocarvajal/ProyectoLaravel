@extends('layouts.admin')

@section('contenido')
<h1 class='text-center'>Lista de entradas</h1>
<table  class="table table-hoover">
	<tr>
		<th>Nombre</th>
		<th>Slug</th>
		<th>Categoria</th>
		<th>Opciones</th>
	</tr>
	@foreach($posts as $post)
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->slug }}</td>
			<td>{{ $post->name }}</td>
			<td>
				{!! Form::open(['route'=>['post.destroy',$post->id],'method'=>'DELETE']) !!}
				{!! link_to_route('post.edit',$title='Editar',$parameters = $post->id) !!}
				{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>
{{$posts->links()}}
@endsection