<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tdokter extends Model
{
    use HasFactory;

    public function periksa(){
        return $this->hasMany(tperiksa::class);
    }
}
