<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PimpinanStaff extends Model
{
    use HasFactory;

    protected $table = 'pimpinan_staff';
    protected $fillable = [
        'foto',
        'nama',
        'status',
        'kata_sambutan',
        'id_google_scholar',
        'nidn',
        'email'
    ];

    public function kataSambutan()
    {
        return $this->hasOne(KataSambutan::class, 'nama', 'id');
    }
}