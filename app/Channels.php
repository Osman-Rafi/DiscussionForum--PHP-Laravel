<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    protected $fillable = ['title'];

    public function Discussion()
    {
        return $this->hasMany('app\Discussion ');
    }
}

