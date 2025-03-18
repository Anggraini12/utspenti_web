<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-4">
        <h2>Data Warga</h2>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('/warga/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warga as $index => $w)
                <tr>
                    <td>{{ $w['nama'] }}</td>
                    <td>{{ $w['nik'] }}</td>
                    <td>{{ $w['alamat'] }}</td>
                    <td>{{ $w['pekerjaan'] }}</td>
                    <td>
                        <a href="{{ url('/warga/edit/' . $index) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

