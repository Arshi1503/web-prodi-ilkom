<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeterampilanUmumCPL extends Model
{
    use HasFactory;

    protected $table = 'keterampilan_umum_c_p_l_s';
    protected $fillable = [
        'indikator'
    ];
}
