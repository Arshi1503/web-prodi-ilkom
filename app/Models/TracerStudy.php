<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TracerStudy extends Model
{
    use HasFactory;

    protected $table = 'tracer_studies';
    protected $fillable = [
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4'
    ];
}