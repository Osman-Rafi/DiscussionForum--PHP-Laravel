<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watcher extends Model
{
    protected $fillable=['discussion_id','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function dicussion()
    {
        return $this->belongsTo('App\Discussion');
    }
}
