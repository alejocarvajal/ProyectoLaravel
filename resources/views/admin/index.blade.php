@extends('layouts.admin')

@section('contenido')
		<h1 class="text-center text-uppercase">Estos son los usuarios registrados</h1>
		{{session('mensaje')}}
		<table class="table table-hover">
			<th>imagen</th>
			<th>nombre</th>
			<th>Email</th>
			<th>Opciones</th>
			@foreach($usuarios as $usuario)
				<tr>
					<td>
						@if($usuario->path=='' || $usuario->path==null)
						<img class='img-responsive' width='60px' src="/img/default-image.png"></td>
						@else
						<img class='img-responsive' width='60px' src="/uploads/{{$usuario->path}}"></td>
						@endif
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					<td>{!! link_to_route('admin.edit',$title='Editar',$parameters=$usuario->id,$atributes=['class'=>'btn btn-warning']) !!}</td>
					<td>
					{!! Form::open(['route'=>['admin.destroy',$usuario->id],'method'=>'DELETE']) !!}
						{!! Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</table>
		<a href="/admin/create" class="btn btn-info">Agregar usuario</a>
@endsection