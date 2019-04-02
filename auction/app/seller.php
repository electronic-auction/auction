<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    //
    public function  product(){
        return $this->hasMany('App\Product');
    }
    public function  Bidding(){
        return $this->hasMany('App\Bidding');
    }
}
