<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF User</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Judul Pengaduan</th>
                            <th scope="col">Isi Pengaduan</th>
                            <th scope="col">Tanggal Pengaduan</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pengaduans as $key=>$pengaduan)
                        <tr>
                            <td>{{$key +1}}</td>
                            <td scope="row">{{$pengaduan->nik}}</td>
                            <td>{{$pengaduan->judul_pengaduan}}</td>
                            <td>{{$pengaduan->isi_pengaduan}}</td>
                            <td>{{$pengaduan->tgl_pengaduan}}</td>
                            <td>{{$pengaduan->kota}}</td>
                            <td><img src="{{ public_path('/pengaduan/'.$pengaduan->foto) }}" alt="" height="150"></td>
                            <td>{{$pengaduan->status}}</td>
                        </tr>       
                        @endforeach
                      </tbody>
                </table>
        </div>
    </div>
</body>
</html>