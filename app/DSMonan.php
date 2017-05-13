<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DSNguyenlieu;
use App\DSDungcu;

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
    return $this->belongsToMany(
            DSDungcu::class,
            'DungcuMonan',
            'idMonan',
            'idDungcu'
        );
  }

  public function NLMA()
  {
    return $this->hasMany('App\NguyenlieuMonan', 'idMonan', 'id');
  }
  public function DCMA()
  {
    return $this->hasMany('App\DungcuMonan', 'idMonan', 'id');
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
