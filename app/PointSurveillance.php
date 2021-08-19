<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointSurveillance extends Model
{
    protected $filenable = array('code', 'cordonnees', 'zone_id','user_id');
    public static $rules = array('code'=>'require|min:30',
                                'cordonnees'=>'require|min:30',
                                'zone_id'=>'require|integer',
                                'user_id'=>'require|bigInteger'
                                );

    public function Zone()
    {
        return $this->belongsTo('App\Zone');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
