<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                          <th scope="col">NIK</th>
                          <th scope="col">Name</th>
                          <th scope="col">No Telpon</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{$key +1}}</td>
                            <td scope="row">{{$user->nik}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->telp}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->role}}</td>
                        </tr>       
                        @endforeach
                      </tbody>
                </table>
        </div>
    </div>
</body>
</html>