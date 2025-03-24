<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class KarirController extends Controller
{
    public function index()
    {
        $karir = Karir::all();
        
        return view('karir', compact('karir'));
    }
}