<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    //
    public function  Bidder(){
        return $this->belongsTo('App\Bidder');
    }
}
