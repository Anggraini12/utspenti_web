<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Edit</title>
</head>
<body>
    
    <div class="container mt-4">
        <h2>Edit Data Warga</h2>
    
        <form action="{{ url('/warga/save') }}" method="POST">
            @csrf
            <input type="hidden" name="index" value="{{ $index }}">
            <div class="mb-3">
                <label>NIK</label>
                <input type="text" class="form-control" name="nik" value="{{ $warga['nik'] }}" required>
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $warga['nama'] }}" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ $warga['alamat'] }}" required>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <input type="text" class="form-control" name="status" value="{{ $warga['status'] }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ url('/warga') }}" class="btn btn-secondary">Batal</a>
            <a href="{{ url('/home') }}" class="btn btn-dark">Kembali ke Beranda</a>
        </form>
    </div>
    
    
    
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

