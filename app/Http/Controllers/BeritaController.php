<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class BeritaController extends Controller
{
    public function index()
    {
        $publikasi = Publikasi::all();
        
        return view('berita', compact('publikasi'));
    }

    public function show($id)
    {
        $publikasi = Publikasi::findOrFail($id);
        return view('detail-berita', compact('publikasi'));
    }
}
