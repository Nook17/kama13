<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacture;
use App\Picture;
use App\Post;
use App\Newsletter;
use App\Contact;

class AdminController extends Controller
{
 public function index()
 {
  $manufactured = Manufacture::all();
  $images       = Picture::all();
  $posts        = Post::all();
  $categories   = Category::all();
  $newsletters   = Newsletter::all();
  $contacts   = Contact::all();

  return view('admin.index', compact('posts', 'categories', 'manufactured', 'images', 'newsletters', 'contacts'));
 }
}
