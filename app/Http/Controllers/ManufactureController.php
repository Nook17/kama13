<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Manufacture;
use App\Picture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
 public function index()
 {
  $manufactured = Manufacture::all();
  return view('admin.manufacture.index', compact('manufactured'));
 }

 public function create()
 {
  $categories = Category::all();
  // $pictures = DB::table('pictures')->distinct()->get(['description']);
  // $pictures = DB::table('pictures')->distinct()->get();
  // $pictures = Picture::distinct()->get(['description']);
  $pictures = Picture::all()->unique('description');
  return view('admin.manufacture.create', compact('categories', 'pictures'));
 }

 public function store(Request $request)
 {
  $this->validate($request, [
   'content'  => 'required|string|min:3',
   'title'    => 'required|string|min:3|max:255',
   'slug'     => 'required|string|min:3|max:255',
  ], [
   'required' => 'Musisz wpisać jakąś treść',
   'min'      => 'Treść musi mieć minimum :min znaków',
   'max'      => 'Treść nie może mieć więcej niż :max znaków',
  ]);

  $manufacture           = new Manufacture;
  $manufacture->content  = $request->content;
  $manufacture->title    = $request->title;
  $manufacture->slug     = $request->slug;
  $manufacture->save();

  $manufacture->categories()->sync($request->categories);
  $manufacture->pictures()->sync($request->pictures);

  $manufactured = Manufacture::all();
  return view('admin.manufacture.index', compact('manufactured'));
 }
 
 public function edit(Manufacture $manufacture)
 {
  $manufacture = Manufacture::findOrFail($manufacture->id);
  $pictures = Picture::all()->unique('description');
  $categories = Category::all();
  return view('admin.manufacture.edit', compact('manufacture', 'pictures', 'categories'));
 }

 public function update(Request $request, Manufacture $manufacture)
 {
  $this->validate($request, [
   'content'  => 'required|string|min:3',
   'title'    => 'required|string|min:3|max:255',
   'slug'     => 'required|string|min:3|max:255',
  ], [
   'required' => 'Musisz wpisać jakąś treść',
   'min'      => 'Treść musi mieć minimum :min znaków',
   'max'      => 'Treść nie może mieć więcej niż :max znaków',
  ]);

  $manufacture           = Manufacture::find($manufacture->id);
  $manufacture->content  = $request->content;
  $manufacture->title    = $request->title;
  $manufacture->slug     = $request->slug;
  $manufacture->save();

  $manufacture->categories()->sync($request->categories);
  $manufacture->pictures()->sync($request->pictures);

  $manufactured = Manufacture::all();
  return view('admin.manufacture.index', compact('manufactured'));
 }

 public function destroy(Manufacture $manufacture)
 {
  Manufacture::findOrFail($manufacture->id)->delete();
  return back();
 }
}
