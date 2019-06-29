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
    public function tags(){
      return $this->belongsToMany('\App\Tag'); //En este caso no necesita aclarar más parámetros porque estoy cumplinedo con el standard:
      // La tabla pivot tiene construido su nombre con los nombres de los modelos que se relacionan y en orden alfabético: product_tag.
      //De lo contrario tendria que colocar los 4 parámetros que vimos en clase.
    }

}
