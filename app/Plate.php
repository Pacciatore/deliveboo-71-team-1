<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    //
    protected $fillable = ['name', 'description', 'available', 'price', 'imgPath', 'user_id'];

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
