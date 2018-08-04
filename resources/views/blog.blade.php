@extends('layouts.app')
@section('content')

 <div class="page-header" style="background-image: url('/img/photo-blog.jfif')">
  <div class="filter"></div>
  <div class="content-center">
   <div class="motto">
    <h1 class="text-center">Kama 13</h1>
    <h2 class="text-center">Witam na moim blogu</h2>
   </div>
  </div>
 </div>

 <div class="blog-4">
  <div class="container">
   <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
     <h2 class="title text-center">Latest Blogposts 4</h2>
     <br />
    </div>
   </div>
   <div class="row">
    @foreach($posts as $post)
    <div class="col-md-6">
     <div class="card card-plain card-blog text-center">
      <div class="card-image">
       <a href="{{ route('post', $post->slug) }}">
        <img class="img img-raised" src="{{ asset('/storage/post/' . $post->img) }}" />
       </a>
      </div>
      <div class="card-body">
       <h6 class="card-category text-warning">
        @foreach($post->categories as $postCategory)
         {{ $postCategory->name }}
        @endforeach
       </h6>
       <h3 class="card-title">
        <a href="post.html">{{ $post->title }}</a>
       </h3>
       <p class="card-description">{!! htmlspecialchars_decode(substr($post->content, 0, 250)) !!} ...</p>
       <br/>
       <a href="post.html" class="btn btn-success btn-sm btn-round"> Czytaj więcej</a>
      </div>
     </div>
    </div>
    @endforeach
   </div>
  </div>
 </div>
@endsection