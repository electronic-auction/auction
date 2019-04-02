<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Bidding()
    {
        return $this->belongsTo('App\Bidding');
    }

    public function Seller(){
        return $this->belongsTo('App\Seller');
    }
    public function Bidder(){
        return $this->belongsTo('App\Bidder');
    }
    public function sold_product(){
        return $this->belongsToMany('');
    }
    public function Category(){
        return $this->belongsTo('App\Category');
    }
}
