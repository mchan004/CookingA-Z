<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DSMonan extends Model
{
  protected $table = 'DSMonan';



  public function DSNguyenlieu()
  {
      return $this->hasMany('App\NguyenlieuMonan', 'idNguyenlieu', 'id');
  }

  public function DSDungcu()
  {
      return $this->hasMany('App\DungcuMonan', 'idDungcu', 'id');
  }

  public function comments()
  {
      return $this->hasMany('App\Comment', 'idMonan', 'id');
  }
}
