<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    //
    public function Bidding()
    {
        return $this->belongsTo('App\Bidding');
    }
    public function Products(){
        return $this->hasMany('App\Product');
    }
    public function  Payment_method(){
        return $this->hasMany('Bidder');
    }
}