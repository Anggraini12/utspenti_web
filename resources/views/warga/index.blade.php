@extends('layouts.master')

@section('title', 'Data Warga')

@section('konten')

<div class="container mt-4">
    <h2>Data Warga Kantor Keuchik</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ url('/warga/create') }}" class="btn btn-primary">Tambah Warga</a>
        <a href="{{ url('/home') }}" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($warga as $w)
            <tr>
                <td>{{ $loop->iteration }}</td> 
                <td>{{ $w['nik'] }}</td>
                <td>{{ $w['nama'] }}</td>
                <td>{{ $w['alamat'] }}</td>
                <td>{{ $w['status'] }}</td>
                <td>
                    <a href="{{ url('/warga/edit/'.$loop->index) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('/warga/delete/'.$loop->index) }}" class="btn btn-danger btn-sm" 
                       onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data warga.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
    <!-- Footer -->
    <footer class="fixed-bottom bg-dark text-white py-2 text-center">
        &copy; 2025 Kantor Keuchik - Penti Anggraini
    </footer>
@endsection
