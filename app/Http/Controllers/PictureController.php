<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
 public function index()
 {
  $pictures = Picture::all();
  return view('admin.picture.index', compact('pictures'));
 }

 public function create()
 {
  return view('admin.picture.create');
 }

 public function store(Request $request)
 {
  if ($request->img) {
   foreach ($request->img as $img) {
    $fileName    = $img->getClientOriginalName();
    $upload_path = $img->storeAs('upload_gallery', $fileName, 'public');

    $picture              = new Picture;
    $picture->description = $request->description;
    $picture->img         = $upload_path;
    $picture->save();
   }

   $pictures = Picture::all();
   return view('admin.picture.index', compact('pictures'));
  }
 }

 public function edit(Picture $picture)
 {
  $picture = Picture::findOrFail($picture->id);
  return view('admin.picture.edit', compact('picture'));
 }

 public function update(Request $request, Picture $picture)
 {
  if ($request->img) {
   	$picture = Picture::findOrFail($picture->id);

    $fileName    = $request->img->getClientOriginalName();
    $upload_path = $request->img->storeAs('upload_gallery', $fileName, 'public');

    $picture->description = $request->description;
    $picture->img         = $upload_path;
    $picture->save();
   } 

   $pictures = Picture::all();
   return view('admin.picture.index', compact('pictures'));
 }

 public function destroy(Picture $picture)
 {
 	$picture = Picture::findOrFail($picture->id)->delete();
 	return back();
 }
}
