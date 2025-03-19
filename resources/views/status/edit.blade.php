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
        <h2>Edit Status Penduduk</h2>
    
        <form action="{{ url('/status/save') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Pemasukan (Rp)</label>
                <input type="number" class="form-control" name="pemasukan" value="{{ $statusPenduduk['Pemasukan'] ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label>Pengeluaran (Rp)</label>
                <input type="number" class="form-control" name="pengeluaran" value="{{ $statusPenduduk['Pengeluaran'] ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label>Yatim Piatu</label>
                <input type="number" class="form-control" name="yatim_piatu" value="{{ $statusPenduduk['Yatim Piatu'] ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label>Kurang Mampu</label>
                <input type="number" class="form-control" name="kurang_mampu" value="{{ $statusPenduduk['Kurang Mampu'] ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label>Meninggal</label>
                <input type="number" class="form-control" name="meninggal" value="{{ $statusPenduduk['Meninggal'] ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label>Total Warga</label>
                <input type="number" class="form-control" name="total_warga" value="{{ $statusPenduduk['Total Warga'] ?? '' }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ url('/status') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

