@extends('layouts.admin')

@section('contenido')
@include('errors.alerts.errorUsers')
	<h1 class="text-center">Editar tu categoria</h1>
	{!!Form::model($cats,['route'=>['categorias.update',$cats->id],'method'=>'PUT'])!!}
		@include('categorias.forms.formCategories')
	{!!Form::close()!!}
@endsection