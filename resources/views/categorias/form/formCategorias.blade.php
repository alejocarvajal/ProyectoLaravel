<div class="form-group">
    {!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}
            {!! Form::token() !!}
            {!! Form::label('name','Ingrese el nombre de la categoria') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        <br>
            {!! Form::submit('Enviar',['Class'=>'btn btn-primary']) !!}
     {!! Form::close() !!}
</div>