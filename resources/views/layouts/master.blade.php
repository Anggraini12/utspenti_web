<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Kantor Keuchik</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">Kantor Keuchik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('warga')" aria-current="page" href="/warga">Data Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('surat')" aria-current="page" href="/surat">Surat</a>
                    </li>>
                    <li class="nav-item">
                        <a class="nav-link @yield('status')" aria-current="page" href="/status">Status</a>
                    </li>

            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-4">
        @yield('konten')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
