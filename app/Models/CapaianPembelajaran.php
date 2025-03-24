<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaianpembelajaran extends Model
{
    use HasFactory;

    protected $table = 'capaianpembelajarans';
    protected $fillable = [
        'teks',
        'deskripsi'
    ];
}
