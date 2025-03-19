<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Tambah Surat</title>
</head>
<body>

    <div class="container mt-4">
        <h2>Tambah Surat</h2>
    
        <form action="{{ url('/surat/save') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nomor Surat</label>
                <input type="text" class="form-control" name="nomor" required>
            </div>
            <div class="mb-3">
                <label>Jenis Surat</label>
                <input type="text" class="form-control" name="jenis" required>
            </div>
            <div class="mb-3">
                <label>Nama Pemohon</label>
                <input type="text" class="form-control" name="pemohon" required>
            </div>
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ url('/surat') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ url('/home') }}" class="btn btn-dark">Kembali ke Beranda</a>
        </form>
    </div>
    

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>