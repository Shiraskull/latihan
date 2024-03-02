<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_nama',
        'jenis_kelamin'
    ];
}
