<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tperiksa extends Model
{
    use HasFactory;

    public function dokter(){
        return $this->belongsTo(tdokter::class,"dokter_id","id");
    }
}
