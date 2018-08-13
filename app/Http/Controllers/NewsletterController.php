<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
 public function index()
 {
 	$newsletters = Newsletter::all();
  return view('admin.newsletter.index', compact('newsletters'));
 }

 public function edit($id)
 {
  $newsletter = Newsletter::findOrFail($id);
  return view('admin.newsletter.edit', compact('newsletter'));
 }

 public function update(Request $request, $id)
 {
  $this->validate($request, [
   'email' => 'required|email',
  ]);

  $newsletter = Newsletter::findOrFail($id);
  $newsletter->email = $request->email;
  if($request->status)
  	$newsletter->status = $request->status;
	else
		$newsletter->status = NULL;
	$newsletter->save();

	$newsletters = Newsletter::all();
  return view('admin.newsletter.index', compact('newsletters'));
 }

 public function destroy($id)
 {
  Newsletter::findOrFail($id)->delete();

  $newsletters = Newsletter::all();
  return view('admin.newsletter.index', compact('newsletters'));
 }
}
