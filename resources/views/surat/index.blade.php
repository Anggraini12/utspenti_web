@extends('layouts.master')

@section('title', 'surat')

@section('konten')

    <div class="container mt-4">
        <h2>Data Pembuatan Surat</h2>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ url('/surat/create') }}" class="btn btn-primary">Tambah Surat</a>
            <a href="{{ url('/home') }}" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Jenis Surat</th>
                    <th>Nama Pemohon</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($surat as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s['nomor'] }}</td>
                    <td>{{ $s['jenis'] }}</td>
                    <td>{{ $s['pemohon'] }}</td>
                    <td>{{ $s['tanggal'] }}</td>
                    <td>
                        <a href="{{ url('/surat/edit/'.$index) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('/surat/delete/'.$index) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data surat.</td>
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

