<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;
use App\Models\StandarKompetensiLulusan;
use App\Models\SasaranKualitas;
use App\Models\Capaianpembelajaran;
use App\Models\SikapCPL;
use App\Models\PengetahuanCPL;
use App\Models\KeterampilanUmumCPL;
use App\Models\KeterampilanKhususCPL;
use App\Models\Kompetensi;
use App\Models\KurikulumSemester1;
use App\Models\KurikulumSemester2;
use App\Models\KurikulumSemester3;
use App\Models\KurikulumSemester4;
use App\Models\KurikulumSemester5;
use App\Models\KurikulumSemester6;
use App\Models\KurikulumSemester7;
use App\Models\KurikulumSemester8;
use App\Models\TracerStudy;

class AkademikController extends Controller
{
    public function index()
    {
        $kurikulum = Kurikulum::first();
        $standarKompetensiLulusan = StandarKompetensiLulusan::all();
        $sasaranKualitas = SasaranKualitas::all();
        $capaianPembelajaran = Capaianpembelajaran::all();
        $sikapCPL = SikapCPL::all();
        $pengetahuanCPL = PengetahuanCPL::all();
        $keterampilanUmumCPL = KeterampilanUmumCPL::all();
        $keterampilanKhususCPL = KeterampilanKhususCPL::all();
        $kompetensi = Kompetensi::all();
        $semester1 = KurikulumSemester1::all();
        $semester2 = KurikulumSemester2::all();
        $semester3 = KurikulumSemester3::all();
        $semester4 = KurikulumSemester4::all();
        $semester5 = KurikulumSemester5::all();
        $semester6 = KurikulumSemester6::all();
        $semester7 = KurikulumSemester7::all();
        $semester8 = KurikulumSemester8::all();
        $tracerStudy = TracerStudy::first();
        
        return view('kurikulum', compact('kurikulum', 'standarKompetensiLulusan', 'sasaranKualitas', 'capaianPembelajaran', 'sikapCPL', 'pengetahuanCPL', 'keterampilanUmumCPL', 'keterampilanKhususCPL', 'kompetensi', 'semester1', 'semester2', 'semester3', 'semester4', 'semester5', 'semester6', 'semester7', 'semester8', 'tracerStudy'));
    }
}