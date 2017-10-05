<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
  protected $fillable = [
      'id', 'name', 'address', 'created_at','updated_at'
  ];

  public function products(){
    return $this->hasMany('App\Product');
  }
}
