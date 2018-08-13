<?php

namespace App\Http\Controllers;

use App\Contact;

class ContactController extends Controller
{
 public function index()
 {
  $contacts = Contact::all();
  return view('admin.contact.index', compact('contacts'));
 }

 public function show($id)
 {
  $contact = Contact::findOrFail($id);
  return view('admin.contact.show', compact('contact'));
 }

 public function destroy($id)
 {
	Contact::findOrFail($id)->delete();
	
  $contacts = Contact::all();
  return view('admin.contact.index', compact('contacts'));
 }
}
