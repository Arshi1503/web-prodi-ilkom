<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumSemester3 extends Model
{
    use HasFactory;

    protected $table = 'kurikulum_semester3s';
    protected $fillable = [
        'kode_mata_kuliah',
        'nama_mata_kuliah',
        'sks'
    ];
}
