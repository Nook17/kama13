<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
 public function manufactures()
 {
  $this->belongsToMany('App\Manufacture', 'picture_manufactures');
 }
}
