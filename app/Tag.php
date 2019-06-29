<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //Para softdeletes

class Tag extends Model
{
    use softDeletes;

    public function products(){
      return $this->belongsToMany('\App\Product'); //En este caso no necesita aclarar más parámetros porque estoy cumplinedo con el standard:
      // La tabla pivot tiene construido su nombre con los nombres de los modelos que se relacionan y en orden alfabético: product_tag.
      //De lo contrario tendria que colocar los 4 parámetros que vimos en clase.
    }
}
