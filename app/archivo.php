<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivo extends Model
{
     protected $fillable = [
        'descripcion', 'direccion', 'urlImg'
    ];
}
