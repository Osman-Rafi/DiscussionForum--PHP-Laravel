<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['content', 'user_id', 'discussion_id'];

    public function Discussion()
    {
        return $this->belongsTo('App\Discussion');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
