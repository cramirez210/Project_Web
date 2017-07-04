<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivo extends Model
{
     protected $fillable = [
        'titulo', 'descripcion', 'direccion', 'urlImg'
    ];

    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }
}
