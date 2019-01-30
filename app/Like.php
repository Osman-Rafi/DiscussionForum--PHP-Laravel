<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable =['reply_id', 'user_id'];

    public function Reply()
    {
        return $this->belongsTo('App\Reply');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
