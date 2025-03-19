@extends('layouts.master')

@section('title', 'status')

@section('konten')

<div class="container mt-4">
    <h2>Status Penduduk</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ url('/status/create') }}" class="btn btn-primary">Tambah Data</a>
        <a href="{{ url('/status/edit') }}" class="btn btn-warning">Edit Data</a>
        <a href="{{ url('/home') }}" class="btn btn-secondary">Kembali ke Beranda</a>

    </div>

    <div class="row">
        @foreach ($statusPenduduk as $key => $value)
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $key }}</h5>
                        <p class="card-text">{{ is_numeric($value) ? number_format($value) : $value }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <!-- Footer -->
    <footer class="fixed-bottom bg-dark text-white py-2 text-center">
        &copy; 2025 Kantor Keuchik - Penti Anggraini
    </footer>
@endsection
