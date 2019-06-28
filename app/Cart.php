<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //Para softdeletes

class Cart extends Model
{
    use softDeletes;
}
