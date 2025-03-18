<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jumlah_warga' => 563,  
            'jumlah_surat' => 120,  
            'pengumuman' => [
                ['judul' => 'Rapat Bulanan Keuchik', 'tanggal' => '20 Maret 2025', 'isi' => 'Rapat akan diadakan di balai desa pada pukul 10.00 WIB.'],
                ['judul' => 'Pendataan Warga Baru', 'tanggal' => '25 Maret 2025', 'isi' => 'Warga diminta untuk melengkapi data kependudukan terbaru.'],
            ]
        ];

        return view('dashboard.index', $data);
    }
}
