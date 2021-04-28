<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Crear Nuevo Usuario</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        registro
                    </div>
                    <div class="panel-body">
                        <form action="{{url('users')}}" method="POST">
                            @csrf
                            <div class="form-goup">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="id">
                                <label for="">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname">
                                <label for="">correo electronico</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <hr>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{url('users')}}">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>