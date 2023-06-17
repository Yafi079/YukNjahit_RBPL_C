<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{

    protected $table = "baju";

    protected $fillable = ['file','deskripsiBaju','hargaBaju','namaBaju','kainBaju','warnaBaju','idGender','idUser'];


    public function gender(){
            return $this->belongsTo('App\Models\Gender','idGender');
        }


}
