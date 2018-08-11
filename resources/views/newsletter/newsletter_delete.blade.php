@extends('layouts.app')
@section('content')
 <div class="page-header" style="background-image: url('{{ asset('img/sections/Message-in-a-bottle.jpg') }}')">
  <div class="filter"></div>
  <div class="content-center">
   <div class="motto">
    <h2 class="text-center">Twoja subskrypcja została usunięta.</h2><br>
    <a href="{{ route('index') }}" class="btn btn-outline-success btn-round">Wróć do strony głównej</a>
   </div>
  </div>
 </div>
@endsection