<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangAdministrasiBisnis extends Model
{
    use HasFactory;

    protected $table = 'tentang_administrasi_bisnis';
    protected $fillable = [
        'thumbnail',
        'deskripsi'
    ];
}
