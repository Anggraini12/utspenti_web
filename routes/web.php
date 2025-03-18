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


Route::get('/login', function () {
    return view('Dashboard.login');
});

// Route::get('/app', function () {
//     return view('layouts.app');
// });


use App\Http\Controllers\DashboardController;

Route::get('/index', [DashboardController::class, 'index'])->name('home');



#Data Warga
Route::get('/warga', function () {
    $warga = [
        ['nama' => 'Ahmad Fauzi', 'nik' => '1234567890123456', 'alamat' => 'Jl. Aceh Singkil No. 5', 'pekerjaan' => 'Petani'],
        ['nama' => 'Siti Aminah', 'nik' => '9876543210987654', 'alamat' => 'Jl. Blok 18 No. 10', 'pekerjaan' => 'Pedagang'],
    ];
    return view('warga.index', compact('warga'));
});

Route::get('/warga/create', function () {
    return view('warga.create');
});

Route::get('/warga/edit/{id}', function ($id) {
    $warga = ['nama' => 'Ahmad Fauzi', 'nik' => '1234567890123456', 'alamat' => 'Jl. Merdeka No. 5', 'pekerjaan' => 'Petani'];
    return view('warga.edit', compact('warga'));
});

// Route::get('/warga/delete/{id}', function ($id) {
//     return redirect('/warga')->with('success', 'Data warga berhasil dihapus!');
// });

