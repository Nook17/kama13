<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Manufacture;
use App\Newsletter;
use App\Picture;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class KamaController extends Controller
{
 public function index()
 {
  $manufactured = Manufacture::all();
  $categories   = Category::all();
  $images       = Picture::all();
  return view('index', compact('categories', 'manufactured', 'images'));
 }

 public function index_category($cat_id)
 {
  $manufactured = Manufacture::whereHas('categories', function ($q) use ($cat_id) {
   $q->where('id', $cat_id);
  })->get();
  $categories = Category::all();
  $images     = Picture::all();
  return view('index', compact('categories', 'manufactured', 'images'));
 }

 public function gallery($id_manufacture, $id_picture)
 {
  $gallery  = Manufacture::find($id_manufacture);
  $des      = DB::table('pictures')->where('id', $id_picture)->value('description');
  $pictures = Picture::where('description', $des)->get();
  return view('gallery', compact('gallery', 'pictures'));
 }

 public function contact_send(Request $request)
 {
  $this->validate($request, [
   'nick'    => 'required|max:25',
   'email'   => 'required|email|max:40',
   'phone'   => 'max:20',
   'message' => 'required|min:10',
  ]);

  $data = array(
   'nick'    => $request->nick,
   'email'   => $request->email,
   'phone'   => $request->phone,
   'mes'     => $request->message,
   'subject' => 'Contakt with Nook17.pl - Blog Webdeveloper',
  );

  Mail::send('emails.newContact', $data, function ($message) use ($data) {
   $message->to('admin@nook17.pl');
   $message->from('admin@nook17.pl');
   $message->subject($data['subject']);
  });

  $contact          = new contact();
  $contact->nick    = $request->input('nick');
  $contact->email   = $request->input('email');
  $contact->phone   = $request->input('phone');
  $contact->message = $request->input('message');
  $contact->save();

  return view('contact.contact_send', compact('contact'));
 }

 public function newsletter_send(Request $request)
 {
  $this->validate($request, [
   'email' => 'required|email|max:40|unique:newsletters',
  ]);

  $code = str_random(40);

  $data = array(
   'email'   => $request->email,
   'subject' => 'Newsletter ze strony Kama 13 - Puszek Kłębuszek',
   'code'    => $code,
   'posts'   => Post::orderBy('created_at', 'DESC')->paginate(4),
  );

  Mail::send('emails.newNewsletter', $data, function ($message) use ($data) {
   $message->to('admin@nook17.pl');
   $message->from('admin@nook17.pl');
   $message->subject($data['subject']);
  });

  Mail::send('emails.userNewsletter', $data, function ($message) use ($data) {
   $message->to($data['email']);
   $message->from('admin@nook17.pl');
   $message->subject($data['subject']);
  });

  $news        = new newsletter();
  $news->email = $request->input('email');
  $news->code  = $code;
  $news->save();

  return view('newsletter.newsletter_send');
 }

 public function newsletter_delete()
 {

 }

 public function newsletter_post()
 {

 }

 public function blog()
 {
  $posts      = Post::all();
  $categories = Category::all();
  return view('blog', compact('posts', 'categories'));
 }

 public function post(Post $post)
 {
  $categories = Category::all();
  return view('post', compact('post', 'categories'));
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
