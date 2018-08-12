@extends('layouts.app')
@section('content')

<div class="page-header" data-parallax="true" style="background-image: url('{{ asset('img/sections/uriel-soberanes.jpg') }}')">
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
                 <div class="col-md-5 ml-auto">
                   <div class="sharing">
                     <h5>Udostępnij</h5>
                     <div class="row">
                       <div class="col">
                         <div class="fb-share-button" data-href="https://kama13.pl" data-layout="button" data-size="small" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkama13.pl%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                       </div>
                       <div class="col">
                         <div class="g-plus" data-action="share" data-href="https://kama13.pl"></div>
                       </div>
                       <div class="col">
                         <div><a class="twitter-share-button" href="https://kama13.pl">Tweet</a></div>
                       </div>
                     </div>
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
              @foreach($last_posts as $last_post)
                <div class="col-md-4">
                  <a href="{{ route('post', $last_post->slug) }}">
                    <img src="{{ asset('storage/' . $last_post->img) }}" alt="{{ $last_post->subtitle }}" class="img-rounded img-responsive" style="width: 350px; height: 233px;">
                  </a>
                  <p class="blog-title">{{ $last_post->title }}</p>
                </div>
               @endforeach
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection