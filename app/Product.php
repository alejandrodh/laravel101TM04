<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // public $table = "Products";
    public $guarded = [];
    // public $timestamps = false;

    public function users(){
      return $this->belongsTo('\App\User', 'user_id');
    }

}
