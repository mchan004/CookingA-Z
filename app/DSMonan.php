<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DSNguyenlieu;

class DSMonan extends Model
{
  protected $table = 'DSMonan';



  public function NguyenlieuMonan()
  {
    return $this->belongsToMany(
            DSNguyenlieu::class,
            'NguyenlieuMonan',
            'idMonan',
            'idNguyenlieu'
        );

  }



  public function DungcuMonan()
  {
      return $this->hasManyThrough('App\DSDungcu', 'App\DungcuMonan', 'idMonan', 'id', 'id');
  }

  public function comments()
  {
      return $this->hasMany('App\Comment', 'idMonan', 'id');
  }
}
