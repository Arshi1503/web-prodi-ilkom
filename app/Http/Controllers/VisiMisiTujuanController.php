<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiTujuan;

class VisiMisiTujuanController extends Controller
{
    public function index()
    {
        $visiMisiTujuan = VisiMisiTujuan::all();
        
        return view('visi-misi-tujuan', compact('visiMisiTujuan'));
    }
}