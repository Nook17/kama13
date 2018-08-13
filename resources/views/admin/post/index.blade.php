@extends('admin.layouts.app')
@section('content')

<div class="content">
 <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
     <div class="card">
      <div class="card-header card-header-rose card-header-icon">
       <div class="card-icon">
        <i class="material-icons">web</i>
       </div>
       <h4 class="card-title">Posty</h4>
      </div>
      <div class="card-body">
       <div class="toolbar text-center">
        <a href="{{ route('post.create') }}" class="btn btn-outline-success btn-sm">Dodaj Post</a>
       </div>
       <div class="material-datatables">
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
         <thead>
          <tr>
           <th>Lp</th>
           <th>Tytuł</th>
           <th>Podtytuł</th>
           <th>Link</th>
           <th>Zdjęcie</th>
           <th>Kategorie</th>
           <th>Data</th>
           <th class="disabled-sorting text-right">Actions</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <th>Lp</th>
           <th>Tytuł</th>
           <th>Podtytuł</th>
           <th>Link</th>
           <th>Zdjęcie</th>
           <th>Kategorie</th>
           <th>Data</th>
           <th class="text-right">Actions</th>
          </tr>
         </tfoot>
         <tbody>
          @foreach($posts as $post)
           <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->subtitle }}</td>
            <td>{{ $post->slug }}</td>
            {{-- <td><img src="{{ asset('/storage/post/' . $post->img) }}" alt="Zdjęcie" width="100"></td> --}}
            <td><img src="{{ asset('storage/' . $post->img) }}" alt="Zdjęcie" width="100"></td>
            <td>
              @foreach ($post->categories as $category)
                {{ $category->name }}
              @endforeach
            </td>
            <td>{{ $post->created_at }}</td>
            <td class="text-right">
             <a href="{{ route('post.edit', $post->slug) }}" class="btn btn-link btn-success btn-just-icon edit">
              <i class="material-icons">dvr</i>
             </a>

             <form action="{{ route('post.destroy' , $post->slug) }}" method="post" id="delete-form-{{$post->id}}" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
              <a href="" onclick="
                if(confirm('Jesteś pewny, że chcesz to USUNĄĆ ???')) {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$post->id}}').submit();
                } else {
                    event.preventDefault();
                  }" class="btn btn-link btn-danger btn-just-icon remove">
                  <i class="material-icons">close</i>
              </a>
            </td>
           </tr>
           @endforeach
         </tbody>
        </table>
       </div>
      </div> <!-- end content-->
     </div> <!--  end card  -->
    </div> <!-- end col-md-12 -->
  </div> <!-- end row -->
 </div>
</div>
@endsection
