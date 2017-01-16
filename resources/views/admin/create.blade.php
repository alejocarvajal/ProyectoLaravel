<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        Hola desde Create Form
        <form method='POST' action="{{route ('admin.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label>Nombre:</label>
            <input type="text" name="name">
            <label>Correo Electronico:</label>
            <input type="text" name="email">
            <label>Password:</label>
            <input type="password" name="password">
            <input type="submit" name="enviar" value="Enviar Datos">
        </form>
    </body>
</html>
