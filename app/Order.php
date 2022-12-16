<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=[ 'ui_name', 'ui_email', 'address', 'payment', 'order_price' ];
    
    
    public function plates(){
        
        return $this->belongsToMany('App\Plate');
    }
}
