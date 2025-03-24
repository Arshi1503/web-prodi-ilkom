<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandarKompetensiLulusan extends Model
{
    use HasFactory;

    protected $table = 'standar_kompetensi_lulusans';
    protected $fillable = [
        'teks',
        'deskripsi'
    ];
}
