<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class akunPembeli extends Model

    {
        protected $table = "akunPembeli";

        public function cart()
        {
            return $this->belongsTo('App\cart');
        }

    }


