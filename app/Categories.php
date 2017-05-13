<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categories';

    public function monan()
       {
           return $this->hasMany('App\DSMonAn','categorie','id');
       }
}
