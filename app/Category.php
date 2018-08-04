<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 public function posts()
 {
  $this->belongsToMany('App\post', 'category_posts');
 }

 public function getRouteKeyName()
 {
  return 'slug';
 }
}
