<div class="form-group">
{!!Form::token()!!}
{!!Form::label('title','Ingrese el Titulo de la Entrada')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}

{!!Form::label('tags','Ingrese etiquetas para la Entrada')!!}
{!!Form::text('tags',null,['class'=>'form-control'])!!}

{!!Form::label('slug','Ingrese slug para la Entrada')!!}
{!!Form::text('slug',null,['class'=>'form-control'])!!}
{!!Form::file('image')!!}

{!!Form::textarea('content',null,['class'=>'form-control ckeditor','placeholder'=>'Ingrese el contenido en este espacio'])!!}


{!!Form::select('cat_id',$cats,null,['class'=>'form-control','placeholder'=>'Seleccione la categoria de su Post'])!!}
<br>
{!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}
</div>