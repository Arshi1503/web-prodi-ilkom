<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanMasuk extends Model
{
    use HasFactory;

    protected $table = 'persyaratan_masuks';
    protected $fillable = [
        'persyaratan'
    ];
}
