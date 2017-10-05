<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id', 'name',
    ];
    public function products(){
      return $this->hasMany('App\Product');
    }
}
