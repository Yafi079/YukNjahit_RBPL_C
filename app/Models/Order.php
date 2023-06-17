<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model

    {
        protected $table = "customerorder";

        protected $fillable = ['file','message','idUser','idBaju','ukuran','alamatPengiriman','idPayment','totalHarga','idPenjahit'];
    }
