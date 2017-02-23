<h1>Formulario Subir Archivos</h1>
{!!Form::open(['url'=>'storage','files'=>true])!!}
	{!!Form::token()!!}
	{!!form::file('image')!!}
	{!!form::submit('Enviar')!!}
{!!form::close()!!}