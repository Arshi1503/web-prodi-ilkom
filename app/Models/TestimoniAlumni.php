<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniAlumni extends Model
{
    use HasFactory;

    protected $table = 'testimoni_alumnis';
    protected $fillable = [
        'nama',
        'foto',
        'teks'
    ];
}