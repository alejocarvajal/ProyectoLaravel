<h1>FORMULARIO SUBIR ARCHIVOS</h1>
{!!Form::open(['url'=>'storage','files'=>true])!!}
	{!!Form::token()!!}
	{!!Form::file('image')!!}
	{!!Form::submit('enviar')!!}
{!!Form::close()!!}