<body class="">

 <div class="wrapper ">
 
  <div class="sidebar" data-color="rose" data-background-color="black" data-image="">
   <div class="logo text-center">
    <a href="{{ route('index') }}" class="simple-text" target="blank">Kama13</a>
   </div>

   <div class="sidebar-wrapper">

    <div class="user">
     <div class="photo">
      <img src="{{ asset('/img/faces/Wioletta.jpg') }}" />
     </div>
     <div class="user-info">
      <a href="{{ route('admin') }}" class="username">
       <span>Wioletta DEMKO</span>
      </a>
     </div>
    </div>

    <ul class="nav">
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('admin') }}">
       <i class="material-icons">apps</i>
       <p>Admin Panel</p>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('manufacture.index') }}">
       <i class="material-icons text-success">gavel</i>
       <p>Produkty</p>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('picture.index') }}">
       <i class="material-icons text-success">camera</i>
       <p>Zdjęcia</p>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('post.index') }}">
       <i class="material-icons text-rose">web</i>
       <p>Posty</p>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('category.index') }}">
       <i class="material-icons text-rose">category</i>
       <p>Kategorie</p>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('newsletter.index') }}">
       <i class="material-icons text-info">local_post_office</i>
       <p>Subskrybcje</p>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link" href="{{ route('contact.index') }}">
       <i class="material-icons text-info">people</i>
       <p>Kontakty</p>
      </a>
     </li>
    </ul>

   </div>
  </div>

  <div class="main-panel">
    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example">
    <div class="container-fluid">
     <div class="navbar-wrapper">
      <div class="navbar-minimize">
       <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
        <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
        <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
       </button>
      </div>
      <a class="navbar-brand" href="">Mini Menu</a>
     </div>
     <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
     </button>
     <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
       <li class="nav-item">
        <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 <i class="material-icons">power_settings_new</i>
                </a>
         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          @csrf
         </form>
        </a>
       </li>
      </ul>
     </div>
    </div>
   </nav> <!-- End Navbar -->
    