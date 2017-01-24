@extends('layouts.admin')
@section('contenido')
	{{session('mensaje')}}
	<h1>Formulario editar</h1>
	{!!Form::model($usuario,['route'=>['admin.update',$usuario->id],'method'=>'PUT'])!!}
		@include('admin.userForm.form')
	{!!Form::close()!!}
@endsection