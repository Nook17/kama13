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

<!--     *********    PROJECTS 1     *********      -->
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
       <a class="nav-link active" data-toggle="pill" href="sections.html#pill-1" role="tab">All categories</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-2" role="tab">Marketing</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-3" role="tab">Development</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-4" role="tab">Productivity</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="pill" href="sections.html#pill-5" role="tab">Web Design</a>
      </li>
     </ul>
     <!-- Pill panes -->
     <div class="tab-content">
      <div class="tab-pane active" id="pill-1" role="tabpanel"></div>
      <div class="tab-pane" id="pill-2" role="tabpanel"></div>
      <div class="tab-pane" id="pill-3" role="tabpanel"></div>
      <div class="tab-pane" id="pill-4" role="tabpanel"></div>
      <div class="tab-pane" id="pill-5" role="tabpanel"></div>
      <div class="tab-pane" id="pill-6" role="tabpanel"></div>
     </div>
    </div>
  </div>
  <div class="space-top"></div>
  <div class="row">
   <div class="col-md-5">
    <div class="card" data-background="image" style="background-image: url('/img/sections/pavel-kosov.jpg')">
     <div class="card-body">
      <h6 class="card-category">Productivy Apps</h6>
      <a href="sections.html#pablo">
        <h3 class="card-title">The Best Productivity Apps</h3>
      </a>
      <p class="card-description">
       Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye
       I love Rick Owens’ bed design but the back is...
      </p>
      <br/>
      <a href="sections.html#pablo" class="btn btn-danger btn-round">
       <i class="fa fa-book" aria-hidden="true"></i> Read Article
      </a>
     </div>
    </div>
   </div>
   <div class="col-md-7">
    <div class="card" data-background="image" style="background-image: url('/img/sections/gukhwa-jang.jpg')">
     <div class="card-body">
       <h6 class="card-category">Materials</h6>
       <h3 class="card-title">US venture investment ticks up</h3>
       <p class="card-description">
        Venture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings
        and a few outsized early-stage rounds....
       </p>
       <br/>
       <a href="sections.html#pablo" class="btn btn-primary btn-round">
        <i class="fa fa-book" aria-hidden="true"></i> Read Article
       </a>
     </div>
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-7">
    <div class="card" data-background="image" style="background-image: url('/img/sections/joshua-stannard.jpg')">
      <div class="card-body">
       <h6 class="card-category">Productivy Apps</h6>
       <a href="sections.html#pablo">
        <h3 class="card-title">MateLabs mixes machine</h3>
       </a>
       <p class="card-description">
        If you’re not familiar with IFTTT, it’s an automation tool for creating your own if/then statements without any programming
        knowledge. The service makes it possible...
       </p>
       <br/>
       <a href="sections.html#pablo" class="btn btn-info btn-round">
        <i class="fa fa-book" aria-hidden="true"></i> Read Article
       </a>
      </div>
     </div>
    </div>
    <div class="col-md-5">
     <div class="card" data-background="image" style="background-image: url('/img/sections/ilya-yakover.jpg')">
      <div class="card-body">
       <h6 class="card-category">Materials</h6>
       <h3 class="card-title">How to find the ‘right’ contacts.</h3>
       <p class="card-description">
        Boom, the invitations start flying and Brella makes it easy to accept/decline, schedule a time and reserve a meeting space
        in Disrupt’s white-glove CrunchMatch meeting...
       </p>
       <br/>
       <a href="sections.html#pablo" class="btn btn-warning btn-round">
        <i class="fa fa-book" aria-hidden="true"></i> Read Article
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!--     *********    END PROJECTS 1      *********      -->

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