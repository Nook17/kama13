@extends('layouts.app')
@section('content')
 <div class="page-header" style="background-image: url('{{ asset('img/sections/home-bg.jpg') }}')">
  <div class="filter"></div>
  <div class="content-center">
   <div class="motto">
    <h3 class="text-center">Dziękuję <b>{{ $contact->nick }}</b> za wysłanie formularza</h3><br><br>
    <a href="{{ route('index') }}" class="btn btn-outline-success btn-round">Wróć do strony głównej</a>
   </div>
  </div>
 </div>
@endsection