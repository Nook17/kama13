<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 public function posts()
 {
  $this->belongsToMany('App\post', 'category_posts');
 }

 public function manufactures()
 {
  $this->belongsToMany('App\Manufacture', 'picture_manufactures');
 }

 public function getRouteKeyName()
 {
  return 'slug';
 }
}
