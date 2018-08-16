@extends('layouts.app')
@section('content')

<div class="page-header" style="background-image: url('{{ asset('img/sections/tlo1-blog.JPG') }}')">
 <div class="filter"></div>
 <div class="content-center">
  <div class="motto">
   <h1 class="text-center">Kama13</h1>
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
     <h2 class="title">Moje małe dzieła</h2>
     <h5 class="description">Zobacz czym się zajmuję w wolnych chwilach</h5>
    </div>
    <div class="project-pills">
     <ul class="nav nav-pills nav-pills-danger">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('index') }}" >Wszytkie</a>
        </li>
        @foreach($categories as $category)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index_category', $category->id) }}">{{ $category->name }}</a>
          </li>
        @endforeach
    </ul>
    </div>
  </div>
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
          {{-- {!! htmlspecialchars_decode(substr($manufacture->content, 0, 150)) !!} --}}
          <small>{{ $manufacture->created_at->format('d-m-Y') }}</small>
         </p>
         <br/>
         <a href="{{ route('gallery', ['id_manufacture' => $manufacture->id, 'id_picture' => $manufacture->pictures->first()->id, 'slug' => $manufacture->slug]) }}" class="btn btn-outline-primary btn-round btn-sm">
          <i class="fa fa-book" aria-hidden="true"></i> Zobacz
         </a>
       </div>
      </div>
     </div>
    @endforeach
  </div>

  <!-- ********* PAGINATION ********* -->
  <div class="row">
    <div class="col-md-12 pagination-area">
      <ul class="pagination justify-content-center">
        <li> {{ $manufactured }} </li>
      </ul>
    </div>
  </div>

  </div> <!-- container -->
 </div> <!-- projects-1 -->
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