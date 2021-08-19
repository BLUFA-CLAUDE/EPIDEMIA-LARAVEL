<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $filenable = array('nom', 'pays_id','user_id');
    public static $rules = array('nom'=>'require|min:30',
                                'pays_id'=>'require|integer',
                                'user_id'=>'require|bigInteger'
                                );

    public function Pays()
    {
        return $this->belongsTo('App\Pays');
    }

    public function PointSurveillance()
    {
        return $this->hasMany('App\PointSurveillance');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
