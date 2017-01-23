<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center text-uppercase">Formulario de registro de usuarios</h2>
            <form method='POST' action="{{route ('admin.store')}}" class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-content">
                <label>Nombre:</label>
                <input type="text" name="name" class="form-control">
                <label>Correo Electronico:</label>
                <input type="text" name="email" class="form-control">
                <label>Password:</label>
                <input type="password" name="password" class="form-control">
                <input type="submit" name="enviar" value="Enviar Datos" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
