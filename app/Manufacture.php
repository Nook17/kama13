<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
 public function pictures()
 {
  return $this->belongsToMany('App\Picture', 'picture_manufactures')->withTimestamps();
 }

 public function categories()
 {
  return $this->belongsToMany('App\Category', 'picture_manufactures')->withTimestamps();
 }

 public function getRouteKeyName()
 {
  return 'slug';
 }
}
