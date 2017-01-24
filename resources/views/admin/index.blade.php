@extends('layouts.admin')

@section('contenido')
		<h1 class="text-center text-uppercase">Estos son los usuarios registrados</h1>
		<table class="table table-hover">
			<th>nombre</th>
			<th>Email</th>
			<th>Opciones</th>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					<td>{!! link_to_route('admin.edit',$title='Editar',$parameters=$usuario->id,$atributes=['class'=>'btn btn-warning']) !!}</a>
					<a href="" class="btn btn-danger">Eliminar</a></td>
				</tr>
			@endforeach
		</table>
		<a href="/admin/create" class="btn btn-info">Agregar usuario</a>
@endsection