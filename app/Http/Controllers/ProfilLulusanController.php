<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilLulusan;
use App\Models\TestimoniAlumni;

class ProfilLulusanController extends Controller
{
    public function index()
    {
        $profilLulusan = ProfilLulusan::all();
        $testimoniAlumni = TestimoniAlumni::all();
        
        return view('profil-lulusan', compact('profilLulusan', 'testimoniAlumni'));
    }
}