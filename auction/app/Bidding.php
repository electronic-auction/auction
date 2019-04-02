<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    //
    public function Product()
    {
        return $this->hasOne('App\Product');
    }
    public function Bidder()
    {
        return $this->hasMany('App\Bidder');
    }
}
