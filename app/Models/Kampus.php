<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'kampuses';
    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'alamat',
        'nomor'
    ];
    
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'kampus_id');
    }
}