<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'id','salon_id','service_id','price','duration'
  ];
  //protected $guarderd = [];
  public function service()
  {
      return $this->belongsTo('App\Service');
  }
  public function salon(){
      return $this->belongsTo('App\Salon');
  }
}
