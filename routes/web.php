<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback (function (){
//     return view('notfound');
// });

// #login
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

// // Halaman Login
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// // Proses Login
// Route::post('/login', function (Request $request) {
//     $email = $request->input('email');
//     $password = $request->input('password');

//     $users = [
//         ['email' => 'admin@gmail.com', 'password' => 'admin123', 'name' => 'Admin'],
//         ['email' => 'user@gmail.com', 'password' => 'user123', 'name' => 'User'],
//     ];

//     foreach ($users as $user) {
//         if ($user['email'] === $email && $user['password'] === $password) {
//             Session::put('user', $user);
//             return redirect()->route('Dashboard.home')->with('success', 'Login berhasil!');
//         }
//     }

//     return redirect()->route('login')->with('error', 'Email atau password salah!');
// })->name('login.post');

// // Halaman Dashboard
// Route::get('/home', function () {
//     if (!Session::has('user')) {
//         return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
//     }

//     $user = Session::get('user');
//     $jumlah_warga = 563; 
//     $jumlah_surat = 15;  

//     return view('Dashboard.home', compact('user', 'jumlah_warga', 'jumlah_surat'));
// })->name('Dashboard.home');

// // Logout
// Route::get('/logout', function () {
//     Session::forget('user');
//     return redirect()->route('login')->with('success', 'Anda telah logout!');
// })->name('logout');




#Index Beranda
Route::get('/home', function () {
    return view('Dashboard.home', [
        'jumlah_warga' => 563, // Ganti dengan data yang sesuai
        'jumlah_surat' => 25,  // Ganti dengan data yang sesuai
        'pengumuman' => [
            ['judul' => 'Libur Nasional', 'tanggal' => '2025-03-19', 'isi' => 'Kantor akan tutup pada tanggal 20 Maret 2025.'],
            ['judul' => 'Pendaftaran Baru', 'tanggal' => '2025-03-18', 'isi' => 'Warga yang ingin mendaftar surat baru dapat menghubungi kantor.']
        ]
    ]);
});



#Data Warga
// Halaman Daftar Warga
Route::get('/warga', function () {
    if (!session()->has('warga')) {
        session(['warga' => [
            ['nik' => '1234567890123456', 'nama' => 'Ahmad', 'alamat' => 'Jl. Aceh Singkil No. 1', 'status' => 'Kepala Keluarga'],
            ['nik' => '9876543210987654', 'nama' => 'Siti', 'alamat' => 'Jl. Blok 18 No. 2', 'status' => 'Ibu Rumah Tangga'],
        ]]);
    }

    $warga = session('warga');
    return view('warga.index', compact('warga'));
});

// Halaman Tambah Warga
Route::get('/warga/create', function () {
    return view('warga.create');
});

// Halaman Edit Warga (Perbaikan Error Undefined Index)
Route::get('/warga/edit/{index}', function ($index) {
    $warga = session('warga', []);

    if (!isset($warga[$index])) {
        return redirect('/warga')->with('error', 'Data tidak ditemukan!');
    }

    return view('warga.edit', ['warga' => $warga[$index], 'index' => $index]);
});

// Simpan Data Warga (Create & Edit)
Route::post('/warga/save', function (Request $request) {
    $warga = session('warga', []);

    $data = [
        'nik' => $request->nik,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'status' => $request->status,
    ];

    // Jika Edit, Perbarui Data di Index yang Benar
    if ($request->has('index') && isset($warga[$request->index])) {
        $warga[$request->index] = $data;
    } else {
        $warga[] = $data;
    }

    session(['warga' => $warga]);

    return redirect('/warga')->with('success', 'Data warga berhasil diperbarui!');
});

// Hapus Warga
Route::get('/warga/delete/{index}', function ($index) {
    $warga = session('warga', []);

    if (!isset($warga[$index])) {
        return redirect('/warga')->with('error', 'Data tidak ditemukan!');
    }

    array_splice($warga, $index, 1);
    session(['warga' => $warga]);

    return redirect('/warga')->with('success', 'Data warga berhasil dihapus!');
});


#Status Penduduk

Route::get('/status', function () {
    $statusPenduduk = session('statusPenduduk', [
        'Pemasukan' => 5000000,
        'Pengeluaran' => 3200000,
        'Yatim Piatu' => 50,
        'Kurang Mampu' => 450,
        'Meninggal' => 30,
        'Total Warga' => 563,
    ]);
    return view('status.index', compact('statusPenduduk'));
});

// Halaman Create
Route::get('/status/create', function () {
    return view('status.create');
});

// Halaman Edit
Route::get('/status/edit', function () {
    $statusPenduduk = session('statusPenduduk', []);
    return view('status.edit', compact('statusPenduduk'));
});

// Simpan Data dari Form (Create & Edit)
Route::post('/status/save', function (Request $request) {
    $data = $request->all();
    
    // Simpan ke session (karena tanpa database)
    session(['statusPenduduk' => [
        'Pemasukan' => $data['pemasukan'],
        'Pengeluaran' => $data['pengeluaran'],
        'Yatim Piatu' => $data['yatim_piatu'],
        'Kurang Mampu' => $data['kurang_mampu'],
        'Meninggal' => $data['meninggal'],
        'Total Warga' => $data['total_warga'],
    ]]);

    return redirect('/status')->with('success', 'Data berhasil diperbarui!');
});


#Pembuatan Surat

// Pembuatan Surat
Route::get('/surat', function () {
    if (!session()->has('surat')) {
        session(['surat' => [
            ['nomor' => '001/KC/2025', 'jenis' => 'Surat Keterangan Domisili', 'pemohon' => 'Ahmad', 'tanggal' => '2025-03-18'],
            ['nomor' => '002/KC/2025', 'jenis' => 'Surat Keterangan Tidak Mampu', 'pemohon' => 'Siti', 'tanggal' => '2025-03-17'],
        ]]);
    }

    $surat = session('surat');
    return view('surat.index', compact('surat'));
});

// Halaman Tambah Surat
Route::get('/surat/create', function () {
    return view('surat.create');
});

// Halaman Edit Surat (Memastikan Data Ditemukan)
Route::get('/surat/edit/{index}', function ($index) {
    $surat = session('surat', []);

    if (!isset($surat[$index])) {
        return redirect('/surat')->with('error', 'Data tidak ditemukan!');
    }

    return view('surat.edit', ['surat' => $surat[$index], 'index' => $index]);
});

// Simpan Data Surat (Create & Edit)
Route::post('/surat/save', function (Request $request) {
    $surat = session('surat', []);

    $data = [
        'nomor' => $request->nomor,
        'jenis' => $request->jenis,
        'pemohon' => $request->pemohon,
        'tanggal' => $request->tanggal,
    ];

    if ($request->has('index') && isset($surat[$request->index])) {
        $surat[$request->index] = $data;
    } else {
        $surat[] = $data;
    }

    session(['surat' => $surat]);

    return redirect('/surat')->with('success', 'Data surat berhasil diperbarui!');
});

// Hapus Surat
Route::get('/surat/delete/{index}', function ($index) {
    $surat = session('surat', []);

    if (!isset($surat[$index])) {
        return redirect('/surat')->with('error', 'Data tidak ditemukan!');
    }

    array_splice($surat, $index, 1);
    session(['surat' => $surat]);

    return redirect('/surat')->with('success', 'Data surat berhasil dihapus!');
});








