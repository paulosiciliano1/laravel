<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'product_id', 'user_id', 'created_at', 'arrival_time'
  ];
  public function product(){
        return $this->belongsTo('App\Product');
  }
  public function user(){
        return $this->belongsTo('App\User');
  }
}
