 <div class="form-group">
     {!! Form::token() !!}
     {!! Form::label('name','Nombre:')!!}
     {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre aqui'])!!}
     {!! Form::label('email','Email:')!!}
     {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email aqui'])!!}
     {!! Form::label('password','Password:')!!}
     {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su password aqui'])!!}
     {!!Form::file('image')!!}
     <br>
     {!! Form::submit('Enviar',['Class'=>'btn btn-primary']) !!}
</div>