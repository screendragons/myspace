<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function profile()
    {
    	return $this->belongsTo('App\Profile');
    }
}
