@extends('layouts.admin')
@section('contenido')
	<h1>Formulario editar</h1>
	{!!Form::model($usuario,['route'=>['admin.update',$usuario->id],'method'=>'PUT'])!!}
		@include('admin.userForm.form')
	{!!Form::close()!!}
@endsection