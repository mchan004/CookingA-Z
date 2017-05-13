<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DSMonan extends Model
{
  protected $table = 'DSMonan';



  public function NguyenlieuMonan()
  {
      return $this->hasManyThrough('App\DSNguyenlieu', 'App\NguyenlieuMonan', 'idMonan', 'id', 'id')->orderBy('priority', 'asc');
  }

  public function DungcuMonan()
  {
      return $this->hasManyThrough('App\DSDungcu', 'App\DungcuMonan', 'idMonan', 'id', 'id');
  }

  public function comments()
  {
      return $this->hasMany('App\Comment', 'idMonan', 'id');
  }

  public function categorie1()
   {
       return $this->belongsTo('App\Categories','categorie','id');
   }
}
