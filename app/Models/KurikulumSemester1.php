<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumSemester1 extends Model
{
    use HasFactory;
    
    protected $table = 'kurikulum_semester1s';
    protected $fillable = [
        'kode_mata_kuliah',
        'nama_mata_kuliah',
        'sks'
    ];
}
