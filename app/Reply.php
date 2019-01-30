<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function Likes()
    {
        return $this->hasMany('App\Like');
    }

    public function is_liked_by_auth_user()
    {
        $id = Auth::id();

        $likers = array();

        foreach ($this->Likes as $like) {
            array_push($likers, $like->user_id);
        }

        if (in_array($id, $likers))
            return true;
        else
            return false;
    }
}
