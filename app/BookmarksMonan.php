<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookmarksMonan extends Model
{
    protected $table = 'BookmarksMonan';

    public $timestamps = false;


    public function monan()
    {
        return $this->hasOne('App\DSMonan', 'idMonan', 'id');
    }


}
