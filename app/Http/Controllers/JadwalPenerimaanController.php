<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPenerimaan;

class JadwalPenerimaanController extends Controller
{
    public function index()
    {
        $jadwalPenerimaan = JadwalPenerimaan::first();
        
        return view('jadwal-penerimaan', compact('jadwalPenerimaan'));
    }
}
