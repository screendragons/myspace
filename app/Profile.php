<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Profile extends Model
{
    protected $fillable = [
        'username',
    	'first_name',
    	'last_name',
    	'e-mail',
    	'password',
    	'address',
    	'zipcode',
    	'image',
    	'relationship_status',

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
