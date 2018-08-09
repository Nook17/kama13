<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 public function index()
 {
  $posts = Post::all();

  return view('admin.post.index', compact('posts'));
 }

 public function create()
 {
  $categories = Category::all();
  return view('admin.post.create', compact('categories'));
 }

 public function store(Request $request)
 {
  $this->validate($request, [
   'content'  => 'required|string|min:3',
   'title'    => 'required|string|min:3|max:255',
   'subtitle' => 'required|string|min:3|max:255',
   'slug'     => 'required|string|min:3|max:255',
  ], [
   'required' => 'Musisz wpisać jakąś treść',
   'min'      => 'Treść musi mieć minimum :min znaków',
   'max'      => 'Treść nie może mieć więcej niż :max znaków',
  ]);

  $post           = new Post;
  $post->content  = $request->content;
  $post->title    = $request->title;
  $post->subtitle = $request->subtitle;
  $post->slug     = $request->slug;

  if ($request->file('img')) {
   $post_img_path = 'public/post';
   $upload_path   = $request->file('img')->store($post_img_path);
   $post_filename = str_replace($post_img_path . '/', '', $upload_path);
   $post->img     = $post_filename;
  }

  $post->save();
  $post->categories()->sync($request->categories);

  $posts = Post::all();

  return view('admin.post.index', compact('posts'));
 }

 public function edit(Post $post)
 {
  $post       = Post::findOrFail($post->id);
  $categories = Category::all();

  return view('admin.post.edit', compact('post', 'categories'));
 }

 public function update(Request $request, $id)
 {
  $this->validate($request, [
   'content'  => 'required|string|min:3',
   'title'    => 'required|string|min:3|max:255',
   'subtitle' => 'required|string|min:3|max:255',
   'slug'     => 'required|string|min:3|max:255',
  ], [
   'required' => 'Musisz wpisać jakąś treść',
   'min'      => 'Treść musi mieć minimum :min znaków',
   'max'      => 'Treść nie może mieć więcej niż :max znaków',
  ]);

  $post           = Post::find($id);
  $post->content  = $request->content;
  $post->title    = $request->title;
  $post->subtitle = $request->subtitle;
  $post->slug     = $request->slug;

  if ($request->file('img')) {
   $post_img_path = 'public/post';
   $upload_path   = $request->file('img')->store($post_img_path);
   $post_filename = str_replace($post_img_path . '/', '', $upload_path);
   $post->img     = $post_filename;
  }

  $post->save();
  $post->categories()->sync($request->categories);

  $posts = Post::all();

  return view('admin.post.index', compact('posts'));
 }

 public function destroy(Post $post)
 {
  Post::find($post->id)->delete();

  return back();
 }
}
