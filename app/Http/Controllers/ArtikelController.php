<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class ArtikelController extends Controller
{
    public function index()
    {
        $publikasi = Publikasi::all();
        
        return view('artikel', compact('publikasi'));
    }

    public function show($id)
    {
        $publikasi = Publikasi::findOrFail($id);
        return view('detail-artikel', compact('publikasi'));
    }
}