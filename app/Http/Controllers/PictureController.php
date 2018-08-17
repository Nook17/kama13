<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
 public function index()
 {
  $pictures = Picture::orderBy('created_at', 'DESC')->get();
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
    if ($request->resolution == null) {
     $picture->resolution = '1440x960';
    } else {
     $picture->resolution = $request->resolution;
    }
    $picture->img = $upload_path;
    $picture->save();
   }

   $pictures = Picture::orderBy('created_at', 'DESC')->get();
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
  $foto = Picture::findOrFail($picture->id);
  if ($request->img) {
   $fileName    = $request->img->getClientOriginalName();
   $upload_path = $request->img->storeAs('upload_gallery', $fileName, 'public');
   $foto->img = $upload_path;
  }
   $foto->description = $request->description;
   if ($request->resolution != $picture->resolution) {
    $foto->resolution = $request->resolution;
   } else {
    $foto->resolution = '1440x960';
   }
   $foto->save();

  $pictures = Picture::orderBy('created_at', 'DESC')->get();
  return view('admin.picture.index', compact('pictures'));
 }

 public function destroy(Picture $picture)
 {
  $picture = Picture::findOrFail($picture->id)->delete();
  return back();
 }
}
