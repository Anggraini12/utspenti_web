<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Kantor Keuchik</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Kantor Keuchik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="warga">Data Warga</a></li>
                    <li class="nav-item"><a class="nav-link" href="surat">Surat</a></li>
                    <li class="nav-item"><a class="nav-link" href="status">Status</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container -->
    <div class="container mt-4">
        <h2 class="text-center">Selamat Datang di Kantor Keuchik</h2>

        <div class="row mt-4">
            <!-- Statistik Jumlah Warga -->
            <div class="col-md-6">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jumlah Warga</h5>
                        <h2>{{ $jumlah_warga ?? '0' }}</h2>
                        <p>Data warga yang terdaftar</p>
                    </div>
                </div>
            </div>

            <!-- Statistik Jumlah Surat -->
            <div class="col-md-6">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jumlah Surat</h5>
                        <h2>{{ $jumlah_surat ?? '0' }}</h2>
                        <p>Surat yang telah diterbitkan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengumuman -->
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Pengumuman Terbaru</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @if(isset($pengumuman) && count($pengumuman) > 0)
                                @foreach($pengumuman as $p)
                                    <li class="list-group-item">
                                        <h5>{{ $p['judul'] }}</h5>
                                        <small class="text-muted">{{ $p['tanggal'] }}</small>
                                        <p>{{ $p['isi'] }}</p>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item text-center">Tidak ada pengumuman</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="fixed-bottom bg-dark text-white py-2 text-center">
        &copy; 2025 Kantor Keuchik - Penti Anggraini
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
