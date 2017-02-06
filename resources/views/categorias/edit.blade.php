@extends('layouts.admin')
@section('contenido')
    <h1>Editar Categoria</h1>
    {!!Form::model($cats,['route'=>['categorias.update',$cats->id],'method'=>'PUT'])!!}
    @include('categorias.form.formCategorias')
    {!!Form::close()!!}
@endsection