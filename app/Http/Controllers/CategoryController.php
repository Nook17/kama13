<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

 public function index()
 {
  $categories = Category::all();
  return view('admin.category.index', compact('categories'));
 }

 public function create()
 {
  return view('admin.category.create');
 }

 public function store(Request $request)
 {
  $this->validate($request, [
   'name' => 'required|string|min:3|max:255',
   'slug' => 'required|string|min:3|max:255',
  ]);

  $category       = new Category;
  $category->name = $request->name;
  $category->slug = $request->slug;
  $category->save();

  return back();
 }

 public function show(Category $category)
 {
  //
 }

 public function edit(Category $category)
 {
  $category = Category::findOrFail($category->id);

  return view('admin.category.edit', compact('category'));
 }

 public function update(Request $request, Category $category)
 {
  $this->validate($request, [
   'name' => 'required|string|min:3|max:255',
   'slug' => 'required|string|min:3|max:255',
  ]);

  $category       = Category::find($category->id);
  $category->name = $request->name;
  $category->slug = $request->slug;
  $category->save();

  $categories = Category::all();
  return view('admin.category.index', compact('categories'));
 }

 public function destroy(Category $category)
 {
  Category::findOrFail($category->id)->delete();
  return back();
 }
}
