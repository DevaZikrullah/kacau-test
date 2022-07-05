<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motor extends Kendaraan
{
    use HasFactory;

    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transisi',
    ];
}
