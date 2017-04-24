<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguyenlieuMonan extends Model
{
    protected $table = 'NguyenlieuMonan';

    public $timestamps = false;

    public function ten()
    {
        return $this->hasOne('App\DSNguyenlieu', 'id', 'idNguyenlieu');
    }

    public function tenMonan()
    {
        return $this->hasOne('App\DSMonan', 'id', 'idMonan');
    }
}
