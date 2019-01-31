<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    protected $fillable = ['title','slug'];

    public function discussions()
    {
        /*Here a Point to be noted.Laravel make some assumptions based on classnames and relationship definitions.
        so it's better to keep Model name 'Channel' instead of 'Channels'. Because Laravel then makes a foreign key
        as 'channed_id'. Otherwise we need to specify foreign key explicitly as below. for More: https://stackoverflow.com/questions/54457219/why-does-laravel-combine-query-is-not-working*/

        return $this->hasMany('App\Discussion','channel_id');
    }
}

