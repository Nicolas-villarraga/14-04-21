<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>One</title>
</head>
<body>
    <div class="container">
        <row>
            <div class="col-mg-12">
            <br>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>lastname</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user-> email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
            </div>
        </row>
    </div>
</body>
</html>