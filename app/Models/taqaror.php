<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taqaror extends Model
{
    use HasFactory;

    public function karmand(){
        return $this->belongsTo('App\Moldels\karmand');
    }
}
