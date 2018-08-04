@extends('layouts.app')
@section('content')

<div class="page-header" data-parallax="true" style="background-image: url('/img/sections/uriel-soberanes.jpg')">
 <div class="filter"></div>
 <div class="content-center">
   <div class="motto">
     <h1 class="title-uppercase text-center">{{ $post->title }}</h1>
     <h3 class="text-center">{{ $post->subtitle }}</h3>
   </div>
 </div>
</div>
<div class="wrapper">
 <div class="main">
   <div class="section section-white">
     <div class="container">
       <div class="row">
         <div class="col-md-6 ml-auto mr-auto text-center title">
           <h2>{{ $post->title }}</h2>
           <h3 class="title-uppercase">
             <small>{{ $post->subtitle }}</small>
           </h3>
         </div>
       </div>
       <div class="row">
         <div class="col-md-8 ml-auto mr-auto">
           <div class="article-content blog_post">
             {!! htmlspecialchars_decode($post->content) !!}
           </div>
           <br/>
           <div class="article-footer">
             <div class="container">
               <div class="row">
                 <div class="col-md-6">
                   <h5>Tags:</h5>
                    @foreach($post->categories as $postCategory)
                      <span class="badge badge-default">{{ $postCategory->name }}</span>
                    @endforeach
                 </div>
                 <div class="col-md-4 ml-auto">
                   <div class="sharing">
                     <h5>Udostępnij</h5>
                     <button class="btn btn-just-icon btn-twitter">
                       <i class="fa fa-twitter"></i>
                     </button>
                     <button class="btn btn-just-icon btn-facebook">
                       <i class="fa fa-facebook"> </i>
                     </button>
                     <button class="btn btn-just-icon btn-google">
                       <i class="fa fa-google"> </i>
                     </button>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <hr>
           <!-- Komentarze -->
          <h3 class="text-center m-4">Napisz co o tym myślisz ...</h3>
          <div id="disqus_thread"></div>
         </div>
       </div>
       <div class="row">
         <div class="related-articles text-center">
           <h3 class="title">Ostatnie posty</h3>
           <legend></legend>
           <div class="container">
             <div class="row">
               <div class="col-md-4">
                 <a href="#">
                   <img src="/img/sections/damir-bosnjak.jpg" alt="Opis zdjęcia" class="img-rounded img-responsive">
                 </a>
                 <p class="blog-title">My Review of Pitchfork’s ‘Indie 500’</p>
               </div>
               <div class="col-md-4">
                 <a href="#">
                   <img src="/img/sections/por7o.jpg" alt="Opis zdjęcia" class="img-rounded img-responsive">
                 </a>
                 <p class="blog-title">Top Events This Month</p>
               </div>
               <div class="col-md-4">
                 <a href="#">
                   <img src="/img/sections/gerrit-vermeulen.jpg" alt="Opis zdjęcia" class="img-rounded img-responsive">
                 </a>
                 <p class="blog-title">You Should Get Excited About Virtual Reality.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection