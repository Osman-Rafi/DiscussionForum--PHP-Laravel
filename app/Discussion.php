<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title','content', 'slug' ,'user_id', 'channel_id'];

    public function Reply()
    {
        return $this->hasMany('app\Reply');
    }

    public function User()
    {
        return $this->belongsTo('app\User');
    }

    public function Channel()
    {
        return $this->belongsTo('app\Channel');
    }
}
