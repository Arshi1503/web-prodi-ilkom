<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PimpinanStaff;

class DosenStaffController extends Controller
{
    public function index()
    {
        $pimpinanStaff = PimpinanStaff::all();
        
        return view('dosen', compact('pimpinanStaff'));
    }

    public function showDetail($id)
    {
        $pimpinanStaff = PimpinanStaff::findOrFail($id);
        return view('detail-kata-sambutan', compact('pimpinanStaff'));
    }

    public function show($id)
    {
        $pimpinanStaff = PimpinanStaff::findOrFail($id);
        return view('detail-dosen', compact('pimpinanStaff'));
    }
}