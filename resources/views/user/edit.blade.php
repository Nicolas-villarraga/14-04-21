<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Formulario de actualizaciòn
                    </div>
                    <div class="panel-body">
                        <form action="{{url('users',$user->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="id" value={{$user->name}}>
                                <label for="">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value={{$user->lastname}}>
                                <label for="">correo electronico</label>
                                <input type="text" class="form-control" name="email" id="email" value={{$user->email}}>
                            </div>
                            <hr>
                            <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                            <a href="{{url('users')}}">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>