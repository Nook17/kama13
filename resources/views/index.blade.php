@extends('layouts.app')
@section('content')

<div class="page-header" style="background-image: url('{{ asset('img/menu_site.jpg') }}')">
 <div class="filter"></div>
 <div class="content-center">
  <div class="motto">
   <h1 class="text-center">Kama 13</h1>
   <h2 class="text-center">Puszek</h2>
   <h3 class="text-center">papier, nożyczki, maszyna ...</h3>
   <h2 class="text-center">Kłębuszek</h2>
  </div>
 </div>
</div>

<div class="section section-project cd-section" id="projects">
 <div class="projects-1">
  <div class="container">

   <div class="row">
    <div class="col-md-8 ml-auto mr-auto text-center">
     <h2 class="title">Some of Our Awesome Products - 1</h2>
     <h5 class="description"> This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
    </div>
    <div class="project-pills">
     <ul class="nav nav-pills nav-pills-danger">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('index') }}" >Wszytkie</a>
        </li>
      @foreach($categories as $category)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index_category', $category->id) }}" >{{ $category->name }}</a>
        </li>
      @endforeach
{{--       <li class="nav-item">
       <a class="nav-link active" data-toggle="pill" href="sections.html#pill-2" role="tab">Marketing</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-3" role="tab">Development</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-4" role="tab">Productivity</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-5" role="tab">Web Design</a>
      </li> --}}
     </ul>
     <!-- Pill panes -->
{{--      <div class="tab-content">
      @foreach($manufactured as $manufacture)
        <div class="tab-pane" id="@foreach($manufacture->categories as $category){{ $category->name }}@endforeach" role="tabpanel">        

        </div>
      @endforeach
      <div class="tab-pane active" id="pill-2" role="tabpanel"></div>
      <div class="tab-pane" id="pill-3" role="tabpanel"></div>
      <div class="tab-pane" id="pill-4" role="tabpanel"></div>
      <div class="tab-pane" id="pill-5" role="tabpanel"></div>
      <div class="tab-pane" id="pill-6" role="tabpanel"></div>
     </div> --}}
    </div>
  </div>
  {{-- <a class="btn btn-danger" href="{{ route('index_category', '2') }}" >Link</a> --}}
  <div class="row">
    @foreach($manufactured as $manufacture)
     <div class="col-md-6">
      <div class="card" data-background="image" style="background-image: url('{{ asset('storage/'. $manufacture->pictures->first()->img) }}')">
       <div class="card-body">
         <h6 class="card-category">
           @foreach($manufacture->categories as $category)
           {{ $category->name }}
           @endforeach
         </h6>
         <h3 class="card-title">{{ $manufacture->title }}</h3>
         <p class="card-description">
          {!! htmlspecialchars_decode(substr($manufacture->content, 0, 150)) !!}
         </p>
         <br/>
         <a href="sections.html#pablo" class="btn btn-outline-primary btn-round btn-sm">
          <i class="fa fa-book" aria-hidden="true"></i> Czytaj
         </a>
       </div>
      </div>
     </div>
    @endforeach
  </div>

  </div> <!-- container -->
 </div> <!-- projects-1 -->
</div> <!-- section -->

<!--     *********    NEWSLETTER      *********      -->
<div class="subscribe-line subscribe-line-transparent" style="background-image: url('/img/sections/technology.jpg')">
 <div class="container">
  <div class="row">
   <div class="col-lg-9 col-md-8 col-sm-8">
    <form class="">
     <div class="form-group">
      <input type="text" value="" class="form-control" placeholder="Podaj swój email...">
     </div>
    </div>
    <div class="col-md-3 col-sm-4">
     <button type="button" class="btn btn-outline-info btn-block btn-round">Subskrybuj</button>
    </div>
   </form>
  </div>
 </div>
</div>

@endsection