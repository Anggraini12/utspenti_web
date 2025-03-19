<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Edit Surat</title>
</head>
<body>

    <div class="container mt-4">
        <h2>Edit Surat</h2>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
    
        <form action="{{ url('/surat/save') }}" method="POST">
            @csrf
            <input type="hidden" name="index" value="{{ $index ?? '' }}">
            
            <div class="mb-3">
                <label>Nomor Surat</label>
                <input type="text" class="form-control" name="nomor" value="{{ old('nomor', $surat['nomor'] ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label>Jenis Surat</label>
                <input type="text" class="form-control" name="jenis" value="{{ old('jenis', $surat['jenis'] ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label>Nama Pemohon</label>
                <input type="text" class="form-control" name="pemohon" value="{{ old('pemohon', $surat['pemohon'] ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal', $surat['tanggal'] ?? '') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ url('/surat') }}" class="btn btn-secondary">Batal</a>
            <a href="{{ url('/home') }}" class="btn btn-dark">Kembali ke Beranda</a>
        </form>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
