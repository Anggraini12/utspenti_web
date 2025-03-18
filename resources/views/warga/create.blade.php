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
        <h2>Tambah Data</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama warga">
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" placeholder="Masukkan NIK">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" placeholder="Masukkan alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" placeholder="Masukkan pekerjaan">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>