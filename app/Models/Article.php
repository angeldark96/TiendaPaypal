<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table = 'articles';

    public function sizes()
    {
        //Crear una relacion entre las 2 tablas
        return $this->belongsToMany('App\Models\Size');
    }

    public function getPriceFloatAttribute()
    {
        $price = (float)$this->attributes['price'];

        return round($price,2);
    }

}