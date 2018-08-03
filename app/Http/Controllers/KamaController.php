<?php

namespace App\Http\Controllers;

class KamaController extends Controller
{
 public function index()
 {
  return view('index');
 }

 public function blog()
 {
  return view('blog');
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
