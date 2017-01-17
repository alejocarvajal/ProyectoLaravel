<!DOCTYPE html>
<html>
<head>
	<title>Index Admin</title>
</head>
<body>
	<h1>Estos son los usuarios registrados</h1>
	<a href="/admin/create">Agregar usuario</a>
	<table border=2>
		<th>nombre</th>
		<th>Email</th>
		<th>Opciones</th>
		@foreach($usuarios as $usuario)
			<tr>
				<td>{{$usuario->name}}</td>
				<td>{{$usuario->email}}</td>
				<td><a href="">Editar </a><a href="">Eliminar</a></td>
			</tr>
		@endforeach
	</table>
</body>
</html>