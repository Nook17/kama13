<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class KamaController extends Controller
{
 public function index()
 {
  return view('index');
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
