@extends('layouts.app')
@section('content')

<div class="page-header page-header-small" style="background-image: url('{{ asset('img/sections/gallery-1440.jpg') }}')">
 <div class="filter"></div>
 <div class="content-center">
   <div class="container">
     <h1>Galeria</h1>
     <h3>A to robię w wolnym czasie</h3>
   </div>
 </div>
</div>

<div class="wrapper">
  <div class="main">
    <div class="section section-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center title">
            <h2>{{ $gallery->title }}</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="article-content blog_post">
              {!! htmlspecialchars_decode($gallery->content) !!}
            </div>
            <br/>
          </div>
        </div>

      </div>
    </div>
  </div>
 </div>

<div class="section section-blue javascript-components">
 <div class="container">

  <!-- gallery -->
  <!-- Root element of PhotoSwipe. Must have class pswp -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
   <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
   <div class="pswp__bg"></div>
   <!-- Slides wrapper with overflow:hidden. -->
   <div class="pswp__scroll-wrap">
     <!-- Container that holds slides. PhotoSwipe keeps only 3 of them in the DOM to save memory. Don't modify these 3 pswp__item elements, data is added later on. -->
     <div class="pswp__container">
       <div class="pswp__item"></div>
       <div class="pswp__item"></div>
       <div class="pswp__item"></div>
     </div>
     <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
     <div class="pswp__ui pswp__ui--hidden">
       <div class="pswp__top-bar">
         <!--  Controls are self-explanatory. Order can be changed. -->
         <div class="pswp__counter"></div>
         <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
         <button class="pswp__button pswp__button--share" title="Share"></button>
         <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
         <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
         <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
         <!-- element will get class pswp__preloader active when preloader is running -->
         <div class="pswp__preloader">
           <div class="pswp__preloader__icn">
             <div class="pswp__preloader__cut">
               <div class="pswp__preloader__donut"></div>
             </div>
           </div>
         </div>
       </div>
       <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
         <div class="pswp__share-tooltip"></div>
       </div>
       <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"><ion-icon name="arrow-round-back"></ion-icon></button>
       <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"><ion-icon name="arrow-round-forward"></ion-icon></button>
       <div class="pswp__caption">
         <div class="pswp__caption__center"></div>
       </div>
     </div>
   </div>
  </div> <!-- pswp -->

  <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
   <div class="row">
    @foreach($pictures as $picture)
     <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item mx-auto">
       <a href="{{ asset('storage/'. $picture->img) }}" itemprop="contentUrl" data-size="{{ $picture->resolution }}" class="">
         <img src="{{ asset('storage/'. $picture->img) }}" itemprop="thumbnail" alt="Image description" class="vertical-image img-rounded img-responsive card"
         />
       </a>
       {{-- <figcaption itemprop="caption description" class="gallery-caption">Foto Description</figcaption> --}}
     </figure>
    @endforeach
   </div> <!-- my-gallery -->

  </div> <!-- row -->
           
  <!-- Komentarze -->
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <h3 class="text-center m-4">Napisz co o tym myślisz ...</h3>
      <div id="disqus_thread"></div>
    </div>
  </div>


 </div> <!-- container -->
</div> <!-- section -->

<!-- ********* NEWSLETTER ********* -->
<div class="subscribe-line subscribe-line-transparent" style="background-image: url('{{ asset('img/sections/technology.jpg') }}')">
 <div class="container">
  <div class="row">
   <div class="col-lg-9 col-md-8 col-sm-8">
    <form method="POST" action="{{ route('newsletter_send') }}" class="">
      @csrf
     <div class="form-group">
      <input type="text" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Podaj swój email...">
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
     </div>
    </div>
    <div class="col-md-3 col-sm-4">
     <button type="submit" class="btn btn-outline-info btn-block btn-round">Subskrybuj</button>
    </div>
   </form>
  </div>
 </div>
</div>

@endsection