<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilLulusan extends Model
{
    use HasFactory;

    protected $table = 'profil_lulusans';
    protected $fillable = [
        'teks',
        'profil_lulusan',
        'deskripsi'
    ];
}