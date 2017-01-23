@extends('layouts.admin')

@section('pera')
            <h2 class="text-center text-uppercase">Formulario de registro de usuarios</h2>
            {!! Form::open(['route'=>'admin.store','method'=>'POST']) !!}
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-content">
                    <label>Nombre:</label>
                    {!! Form::token() !!}
                    {!! Form::label('name','Nombre:')!!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre aqui'])!!}
                    {!! Form::label('email','Email:')!!}
                    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email aqui'])!!}
                    {!! Form::label('password','Password:')!!}
                    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su password aqui'])!!}
                    <br>
                    {!! Form::submit('Enviar',['Class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
@endsection