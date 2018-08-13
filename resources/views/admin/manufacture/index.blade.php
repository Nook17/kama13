@extends('admin.layouts.app')
@section('content')

<div class="content">
 <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
     <div class="card">
      <div class="card-header card-header-success card-header-icon">
       <div class="card-icon">
        <i class="material-icons">gavel</i>
       </div>
       <h4 class="card-title">Produkty</h4>
      </div>
      <div class="card-body">
       <div class="toolbar text-center">
        <a href="{{ route('manufacture.create') }}" class="btn btn-outline-success btn-sm">Dodaj Produkt</a>
       </div>
       <div class="material-datatables">
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
         <thead>
          <tr>
           <th>Lp</th>
           <th>Tytuł</th>
           <th>Link</th>
           <th>Kategorie</th>
           <th>Galeria</th>
           <th>Data</th>
           <th class="disabled-sorting text-right">Actions</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <th>Lp</th>
           <th>Tytuł</th>
           <th>Link</th>
           <th>Kategorie</th>
           <th>Galeria</th>
           <th>Data</th>
           <th class="text-right">Actions</th>
          </tr>
         </tfoot>
         <tbody>
          @foreach($manufactured as $manufacture)
           <tr>
            <td>{{ $manufacture->id }}</td>
            <td>{{ $manufacture->title }}</td>
            <td>{{ $manufacture->slug }}</td>
            {{-- <td><img src="{{ asset('/storage/post/' . $manufacture->img) }}" alt="Zdjęcie" width="100"></td> --}}
            <td>
              @foreach ($manufacture->categories as $category)
                {{ $category->name }}
              @endforeach
            </td>
            <td>
              @foreach ($manufacture->pictures as $picture)
                {{ $picture->description }}
              @endforeach
            </td>
            <td>{{ $manufacture->created_at }}</td>
            <td class="text-right">
             <a href="{{ route('manufacture.edit', $manufacture->slug) }}" class="btn btn-link btn-success btn-just-icon edit">
              <i class="material-icons">dvr</i>
             </a>

             <form action="{{ route('manufacture.destroy' , $manufacture->slug) }}" method="post" id="delete-form-{{$manufacture->id}}" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
              <a href="" onclick="
                if(confirm('Jesteś pewny, że chcesz to USUNĄĆ ???')) {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$manufacture->id}}').submit();
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
