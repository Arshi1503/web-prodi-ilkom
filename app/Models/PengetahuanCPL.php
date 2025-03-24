<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengetahuanCPL extends Model
{
    use HasFactory;

    protected $table = 'pengetahuan_c_p_l_s';
    protected $fillable = [
        'indikator'
    ];
}
