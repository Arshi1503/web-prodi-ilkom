<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisiTujuan extends Model
{
    use HasFactory;

    protected $table = 'visi_misi_tujuans';
    protected $fillable = [
        'visi',
        'misi',
        'tujuan'
    ];
    protected $casts = [
        'misi' => 'array',
        'tujuan' => 'array',
    ];
}