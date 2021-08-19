<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $filenable = array('nom','user_id');
    public static $rules = array('nom'=>'require|min:30',
                                'user_id'=>'require|bigInteger');

    public function Zone()
    {
        return $this->hasMany('App\Zone');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
