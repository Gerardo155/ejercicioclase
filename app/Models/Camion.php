<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{

    public function Transporte(){

        return $this ->hasMany('App\Models\Transporte');
    }



    use HasFactory;
}
