<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPenerimaan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_penerimaans';
    protected $fillable = [
        'teks',
        'pendaftaran_sampai_dengan',
        'tes',
        'pengumuman_hasil_tes',
        'masa_orientasi',
        'perkuliahan_perdana'
    ];
}
