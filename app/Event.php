<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $fillable = [
      'Product_id', 'user_id', 'created_at', 'arrival_time'
  ];
  public function product(){
        return $this->belongsTo('App\Product');
  }
  public function user(){
        return $this->belongsTo('App\User');
  }
}
