<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Auth;


class Discussion extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'user_id', 'channel_id'];

    public function Replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Channel()
    {
        return $this->belongsTo('App\Channels');
    }

    public function watchers()
    {
        return $this->hasMany('App\Watcher');
    }

    /*Method for Watch Functionality*/

    public function is_being_watched_by_auth_user()
    {
        $id = Auth::id();

        $watchers_id = array();

        foreach ($this->watchers as $watcher)
            array_push($watchers_id, $watcher->user_id);


        if (in_array($id, $watchers_id))
            return true;
        else
            return false;
    }

    public function PostStatus()
    {
        return true;
    }
}
