<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $fillable = [
        'kampus_id',
        'nama',
        'gambar',
        'deskripsi'
    ];

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'kampus_id');
    }
}