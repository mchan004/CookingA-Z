<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comment';
    public function ten()
    {
        return $this->hasOne('App\User', 'id', 'createby');
    }
}
