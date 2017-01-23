<!DOCTYPE html>
<html>
<head>
	<title>Index Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center text-uppercase">Estos son los usuarios registrados</h1>
		<table class="table table-hover">
			<th>nombre</th>
			<th>Email</th>
			<th>Opciones</th>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					<td><a href="" class="btn btn-warning">Editar </a><a href="" class="btn btn-danger">Eliminar</a></td>
				</tr>
			@endforeach
		</table>
		<a href="/admin/create" class="btn btn-info">Agregar usuario</a>
	</div>
</body>
</html>