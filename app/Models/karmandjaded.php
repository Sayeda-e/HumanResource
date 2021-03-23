<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karmandjaded extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'E_name',
        'lastname',
        'E_lastname',
        'Fname',
        'padarkalan',
        'tarikhtawalod',
        'numberTazkira',
        'safha',
        'jold',
        'sokonatAsly',
        'sokonatFehly',
        'jensiat',
        'phone',
        'email',
        'halatMadany',
        'mashMaslaky',
        'mashShakhsy',
        'codeTashkilaty',
        'milyat',
        'sazmanSiasy',
        'groupeKhoon',
        'role'

    ];

   public function taqaror(){
       return $this->hasOne('App\Models\taqaror');
   } 
}
