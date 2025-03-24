<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akreditasi;

class AkreditasiController extends Controller
{
    public function index()
    {
        $akreditasi = Akreditasi::first();
        
        return view('akreditasi', compact('akreditasi'));
    }
}