@extends('admin.layouts.app')
@section('content')

<div class="content">
 <div class="container-fluid">

  <div class="row">
   <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
     <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
       <a href="{{ route('manufacture.index') }}" style="color:aliceblue"><i class="material-icons">gavel</i></a>
      </div>
      <p class="card-category">Ilość produktów</p>
      <h3 class="card-title">{{ $manufactured->count() }}</h3>
     </div>
     <div class="card-footer">
      <div class="stats">
       <i class="material-icons text-info">edit</i>
       <a href="{{ route('manufacture.create') }}">Dodaj nowy produkt</a>
      </div>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
     <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
       <a href="{{ route('picture.index') }}" style="color:aliceblue"><i class="material-icons">camera</i></a>
      </div>
      <p class="card-category">Ilość zdjęć</p>
      <h3 class="card-title">{{ $images->count() }}</h3>
     </div>
     <div class="card-footer">
      <div class="stats">
       <i class="material-icons text-info">edit</i>
       <a href="{{ route('picture.create') }}">Dodaj nową galerię</a>
      </div>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
     <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
       <a href="{{ route('post.index') }}" style="color:aliceblue"><i class="material-icons">web</i></a>
      </div>
      <p class="card-category">Ilość postów</p>
      <h3 class="card-title">{{ $posts->count() }}</h3>
     </div>
     <div class="card-footer">
      <div class="stats">
       <i class="material-icons text-info">edit</i>
       <a href="{{ route('post.create') }}">Dodaj nowy post</a>
      </div>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
     <div class="card-header card-header-primary card-header-icon">
      <div class="card-icon">
        <a href="{{ route('category.index') }}" style="color:aliceblue"><i class="material-icons">category</i></a>
      </div>
       <p class="card-category">Ilość Kategorii</p>
       <h3 class="card-title">{{ $categories->count() }}</h3>
     </div>
     <div class="card-footer">
      <div class="stats">
       <i class="material-icons text-info">edit</i>
       <a href="{{ route('category.create') }}">Dodaj nową kategorię</a>
      </div>
     </div>
    </div>
   </div>
  </div>

 </div>
</div> <!-- content -->

@endsection
