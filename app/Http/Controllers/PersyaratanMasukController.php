<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersyaratanMasuk;

class PersyaratanMasukController extends Controller
{
    public function index()
    {
        $persyaratanMasuk = PersyaratanMasuk::all();
        
        return view('persyaratan-masuk', compact('persyaratanMasuk'));
    }
}
