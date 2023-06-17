<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model

    {
        protected $table = "cart";

        protected $fillable = ['file','message','idUser','idBaju','idPenjahit','idCart','ukuran'];

        public function akunPembeli()
        {
            return $this->hasOne('App\Models\akunPembeli');
        }

        public function baju()
        {
            return $this->hasMany('App\Models\baju');
        }

    }



