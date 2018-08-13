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
      <p class="card-category">Produkty</p>
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
     <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
       <a href="{{ route('picture.index') }}" style="color:aliceblue"><i class="material-icons">camera</i></a>
      </div>
      <p class="card-category">Zdjęcia</p>
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
      <p class="card-category">Posty</p>
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
     <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <a href="{{ route('category.index') }}" style="color:aliceblue"><i class="material-icons">category</i></a>
      </div>
       <p class="card-category">Kategorie</p>
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
  </div> <!-- row -->

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
        <a href="{{ route('newsletter.index') }}" style="color:aliceblue"><i class="material-icons">local_post_office</i></a>
        </div>
        <p class="card-category">subskrybenci</p>
        <h3 class="card-title">{{ $newsletters->count() }}</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
        <i class="material-icons text-danger">send</i>
        <a href="{{ route('newsletter_post') }}" onclick="if (! confirm('Na pewno wysłać wszystkim Email z powiadomieniem ???')) { return false; }">Wyślij subskrybcję</a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
        <a href="{{ route('contact.index') }}" style="color:aliceblue"><i class="material-icons">people</i></a>
        </div>
        <p class="card-category">kontakty</p>
        <h3 class="card-title">{{ $contacts->count() }}</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
        <i class="material-icons text-info">remove_red_eye</i>
        <a href="{{ route('contact.index') }}">Przeglądaj listę kontaktów</a>
        </div>
      </div>
      </div>
    </div>

  </div> <!-- row -->

 </div>
</div> <!-- content -->

@endsection
