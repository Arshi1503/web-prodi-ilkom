<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SikapCPL extends Model
{
    use HasFactory;

    protected $table = 'sikap_c_p_l_s';
    protected $fillable = [
        'indikator'
    ];
}
