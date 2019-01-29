<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Discussion extends Model
{
    protected $fillable = ['title','content', 'slug' ,'user_id', 'channel_id'];

    public function Reply()
    {
        return $this->hasMany('App\Reply');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Channel()
    {
        return $this->belongsTo('App\Channel');
    }
}
