<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PimpinanStaff;
use App\Services\GoogleScholarService;

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
        $nama = $pimpinanStaff->nama;

        $service = new GoogleScholarService();

        // Jika id_google_scholar kosong, cari profil scholar dan simpan hanya ID-nya
        if (!$pimpinanStaff->id_google_scholar) {
            $profileLink = $service->searchAuthorProfile($nama);

            if ($profileLink) {
                $parsed = parse_url($profileLink);
                parse_str($parsed['query'] ?? '', $queryParams);
                $authorId = $queryParams['user'] ?? null;

                if ($authorId) {
                    $pimpinanStaff->id_google_scholar = $authorId;
                    $pimpinanStaff->save();
                }
            }
        }

        // Ambil ID Google Scholar dari kolom id_google_scholar
        $results = [];

        if ($pimpinanStaff->id_google_scholar) {
            $results = $service->getArticlesByAuthorId($pimpinanStaff->id_google_scholar);
        }

        return view('detail-dosen', compact('pimpinanStaff', 'results', 'nama'));
    }

    public function showArtikelDosen($nama)
    {
        // Pastikan variabel nama diteruskan dengan benar
        $service = new GoogleScholarService();
        $results = $service->searchArticles($nama);

        return view('detail-jurnal', compact('results', 'nama'));
    }

    private function extractGoogleScholarId($input)
    {
        // Jika input sudah ID (tanpa "http"), langsung return
        if (!str_contains($input, 'http')) {
            return $input;
        }

        // Jika input berupa link, ambil ID-nya dari parameter `user`
        parse_str(parse_url($input, PHP_URL_QUERY), $queryParams);
        return $queryParams['user'] ?? null;
    }

}