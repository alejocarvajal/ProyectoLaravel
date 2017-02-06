@extends('layouts.admin')

@section('contenido')
    <h1>Agregar nuevas entradas</h1>
    {!! Form::open(['route'=>'post.store','method'=>'POST']) !!}
    {!! Form::token() !!}
    {!! Form::label('title','Titulo de la entrada') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
    {!! Form::label('tags','Ingrese las etiquetas para la entrada') !!}
    {!! Form::text('tags',null,['class'=>'form-control']) !!}

    {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Ingrese el contenido de este espacio']) !!}
    {!! Form::select('cat_id',$cats,null,['class'=>'form-control','placeholder'=>'Seleccione la categoria de su post']) !!}
    <br>
    {!! Form::submit('Enviar',['Class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection