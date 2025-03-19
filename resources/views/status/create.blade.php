<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Tambah Data Status</title>
</head>
<body>
    
    <div class="container mt-4">
        <h2>Tambah Status Penduduk</h2>
    
        <form action="{{ url('/status/save') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Pemasukan (Rp)</label>
                <input type="number" class="form-control" name="pemasukan" required>
            </div>
            <div class="mb-3">
                <label>Pengeluaran (Rp)</label>
                <input type="number" class="form-control" name="pengeluaran" required>
            </div>
            <div class="mb-3">
                <label>Yatim Piatu</label>
                <input type="number" class="form-control" name="yatim_piatu" required>
            </div>
            <div class="mb-3">
                <label>Kurang Mampu</label>
                <input type="number" class="form-control" name="kurang_mampu" required>
            </div>
            <div class="mb-3">
                <label>Meninggal</label>
                <input type="number" class="form-control" name="meninggal" required>
            </div>
            <div class="mb-3">
                <label>Total Warga</label>
                <input type="number" class="form-control" name="total_warga" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ url('/status') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>