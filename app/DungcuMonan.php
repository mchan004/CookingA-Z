<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DungcuMonan extends Model
{
    protected $table = 'DungcuMonan';

    public $timestamps = false;

    public function ten()
    {
        return $this->hasOne('App\DSDungcu', 'id', 'idDungcu');
    }

    public function tenMonan()
    {
        return $this->hasOne('App\DSMonan', 'id', 'idMonan');
    }
}
