<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class AdminController extends Controller
{
 public function index()
 {
  $posts      = Post::all();
  $categories = Category::all();

  return view('admin.index', compact('posts', 'categories'));
 }
}
