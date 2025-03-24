<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use App\Models\VisiMisiTujuan;
use App\Models\PimpinanStaff;
use App\Models\Publikasi;

class BerandaController extends Controller
{
    public function index()
    {
        $tentang = Tentang::first();
        $visiMisiTujuan = VisiMisiTujuan::first();
        $pimpinanStaff = PimpinanStaff::first();
        $publikasi = Publikasi::all();
        
        return view('beranda', compact('tentang', 'visiMisiTujuan', 'pimpinanStaff', 'publikasi'));
    }
}