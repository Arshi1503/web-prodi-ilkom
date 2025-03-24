<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeterampilanKhususCPL extends Model
{
    use HasFactory;

    protected $table = 'keterampilan_khusus_c_p_l_s';
    protected $fillable = [
        'indikator'
    ];
}
