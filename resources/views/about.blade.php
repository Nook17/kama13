@extends('layouts.app')
@section('content')

<div class="page-header page-header-small" style="background-image: url('{{ asset('img/sections/gerrit-vermeulen.jpg') }}')">
 <div class="filter"></div>
 <div class="content-center">
   <div class="container">
     <h1>Wioletta Demko</h1>
     <h3>Skąd pomysł na …</h3>
   </div>
 </div>
</div>
<div class="main">
 <div class="section">
   <div class="container n_text_black">
     <h3 class="title-uppercase">Wszystko zaczęło się dość dziwnie…</h3>
     <p>Od zawsze lubiłam robić coś z ”niczego”, jeżeli rzecz czy przedmiot dość fajny wpadł mi w ręce to próbowałam zrobić z niego coś ciekawego, a jednocześnie pożytecznego. Takie cudeńka nie mając internetu i pieniędzy najlepiej się robiło - chociaż trudniej muszę przyznać, ponieważ robiłam z tego co miałam akurat pod ręką.</p>
     <p>Fakt faktem jest, że trzeba było się nagimnastykować, pogłówkować i chyba to sprawiało mi taką frajdę.</p>
     <h3 class="title-uppercase">My
       <i class="fa fa-heart heart"></i>&nbsp; to co robimy.</h3>
     <p>Od zawsze w pracy pomagały mi dzieci. Były moją największą inspiracją i motywacją do dalszego działania. Fajnie mieć dla kogo poświęcać swój czas no i w końcu miło od kogoś usłyszeć pochwały ...</p>
     <h2 class="text-center creators">Ja i moja rodzinka</h2>
     <div class="row">
       <div class="col-md-4">
         <div class="card card-profile card-plain">
           <div class="card-body">
             <div class="card-avatar">
               <a href="about-us.html#avatar">
                 <img src="{{ asset('img/faces/Wioletta.jpg') }}" alt="Wioletka">
               </a>
             </div>
             <p class="card-description n_card text-center">To ja truteń szydełkowy</p>
           </div>
           {{-- <div class="card-footer text-center">
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-linkedin">
               <i class="fa fa-linkedin"></i>
             </a>
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-dribbble">
               <i class="fa fa-dribbble"></i>
             </a>
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-instagram">
               <i class="fa fa-instagram"></i>
             </a>
           </div> --}}
         </div>
       </div>
       <div class="col-md-4">
         <div class="card card-profile card-plain">
           <div class="card-body">
             <div class="card-avatar">
               <a href="about-us.html#avatar">
                 <img src="{{ asset('img/faces/Kamila.jpg') }}" alt="Kamilka">
                 {{-- <h4 class="card-title">Sophia West</h4> --}}
               </a>
             </div>
             <p class="card-description n_card text-center">Kamilka - moja główna pomysłodawczyni i zarazem największy krytyk</p>
           </div>
           {{-- <div class="card-footer text-center">
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-linkedin">
               <i class="fa fa-linkedin"></i>
             </a>
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-dribbble">
               <i class="fa fa-dribbble"></i>
             </a>
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-pinterest">
               <i class="fa fa-pinterest"></i>
             </a>
           </div> --}}
         </div>
       </div>
       <div class="col-md-4">
         <div class="card card-profile card-plain">
           <div class="card-body">
             <div class="card-avatar">
               <a href="about-us.html#avatar">
                 <img src="{{ asset('img/faces/Konrad.jpg') }}" alt="Konradek">
                 {{-- <h4 class="card-title">Lucas Andrew</h4> --}}
               </a>
             </div>
             <p class="card-description n_card text-center">Konradek - szycie strojów mojemu synkowi to istny relaks</p>
           </div>
           {{-- <div class="card-footer text-center">
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-youtube">
               <i class="fa fa-youtube"></i>
             </a>
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-twitter">
               <i class="fa fa-twitter"></i>
             </a>
             <a href="about-us.html#pablo" class="btn btn-just-icon btn-instagram">
               <i class="fa fa-instagram"></i>
             </a>
           </div> --}}
         </div>
       </div>
     </div>

     {{-- <h3 class="more-info text-center">Need more information?</h3>
     <div class="row coloured-cards">
       <div class="col-md-4 col-sm-6">
         <div class="card-big-shadow">
           <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
             <div class="card-body">
               <h6 class="card-category">Best cards</h6>
               <h4 class="card-title">
                 <a href="about-us.html#paper-kit">Blue Card</a>
               </h4>
               <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and
                 making it relevant to the moment. </p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6">
         <div class="card-big-shadow">
           <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
             <div class="card-body">
               <h6 class="card-category">Best cards</h6>
               <h4 class="card-title">
                 <a href="about-us.html#paper-kit">Green Card</a>
               </h4>
               <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and
                 making it relevant to the moment. </p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6">
         <div class="card-big-shadow">
           <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
             <div class="card-body">
               <h6 class="card-category">Best cards</h6>
               <h4 class="card-title">
                 <a href="about-us.html#paper-kit">Yellow Card</a>
               </h4>
               <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and
                 making it relevant to the moment. </p>
             </div>
           </div>
         </div>
       </div>
     </div> --}}

   </div>
 </div>
</div>
@endsection