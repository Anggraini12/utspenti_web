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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Beranda Kantor Keuchik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/warga">Data Warga</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Surat</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Status</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="fixed-bottom bg-dark text-white py-2 mt-4 text-center">
        Copyright &copy; Penti Anggraini - 2025
    </footer>


<div class="container mt-4">
    <div class="row">
        <!-- Statistik -->
        <div class="col-md-6">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Warga</h5>
                    <h2>{{ $jumlah_warga }}</h2>
                    <p>Data warga yang terdaftar</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Surat</h5>
                    <h2>{{ $jumlah_surat }}</h2>
                    <p>Surat yang telah diterbitkan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengumuman -->
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Pengumuman Terbaru</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($pengumuman as $p)
                            <li class="list-group-item">
                                <h5>{{ $p['judul'] }}</h5>
                                <small class="text-muted">{{ $p['tanggal'] }}</small>
                                <p>{{ $p['isi'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Tombol Aksi -->
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="#" class="btn btn-primary btn-lg w-100">Kelola Data Warga</a>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-warning btn-lg w-100">Manajemen Surat</a>
        </div>
    </div>
</div> --}}


        <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>


