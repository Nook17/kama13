<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacture;
use App\Picture;
use App\Post;

class AdminController extends Controller
{
 public function index()
 {
  $manufactured = Manufacture::all();
  $images       = Picture::all();
  $posts        = Post::all();
  $categories   = Category::all();

  return view('admin.index', compact('posts', 'categories', 'manufactured', 'images'));
 }
}
