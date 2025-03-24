<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;
use App\Models\Fasilitas;

class KampusController extends Controller
{
    public function index()
    {
        $kampus = Kampus::all();
        
        return view('fasilitas', compact('kampus'));
    }

    public function show($id)
    {
        $kampus = Kampus::findOrFail($id);
        $fasilitas = Fasilitas::where('kampus_id', $id)->get();

        return view('detail-fasilitas', compact('kampus', 'fasilitas'));
    }
}