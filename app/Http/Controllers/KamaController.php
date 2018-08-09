<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Manufacture;
use App\Picture;
use App\Post;

class KamaController extends Controller
{
 public function index()
 {
  $manufactured = Manufacture::all();
  $categories   = Category::all();
  $images       = Picture::all();
  return view('index', compact('categories', 'manufactured', 'images'));
 } 

 public function index_category($cat_id)
 {
  $manufactured = Manufacture::whereHas('categories', function($q) use ($cat_id) {
    $q->where('id', $cat_id);
    })->get();
  $categories   = Category::all();
  $images       = Picture::all();
  return view('index', compact('categories', 'manufactured', 'images'));
 }

 public function blog()
 {
  $posts      = Post::all();
  $categories = Category::all();
  return view('blog', compact('posts', 'categories'));
 }

 public function post(Post $post)
 {
  $categories = Category::all();
  return view('post', compact('post', 'categories'));
 }

 public function about()
 {
  return view('about');
 }

 public function contact()
 {
  return view('contact');
 }
}
