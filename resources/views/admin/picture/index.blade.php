@extends('admin.layouts.app')
@section('content')

<div class="content">
 <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
     <div class="card">
      <div class="card-header card-header-primary card-header-icon">
       <div class="card-icon">
        <i class="material-icons">camera</i>
       </div>
       <h4 class="card-title">Galeria</h4>
      </div>
      <div class="card-body">
       <div class="toolbar text-center">
        <a href="{{ route('picture.create') }}" class="btn btn-success">Dodaj Galerię</a>
       </div>
       <div class="material-datatables">
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
         <thead>
          <tr>
           <th>Lp</th>
           <th>Opis</th>
           <th>Zdjęcia</th>
           <th>Data</th>
           <th class="disabled-sorting text-right">Actions</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <th>Lp</th>
           <th>Opis</th>
           <th>Zdjęcia</th>
           <th>Data</th>
           <th class="text-right">Actions</th>
          </tr>
         </tfoot>
         <tbody>
          @foreach($pictures as $picture)
           <tr>
            <td>{{ $picture->id }}</td>
            <td>{{ $picture->description }}</td>
            <td><img src="{{ asset('storage/' . $picture->img) }}" alt="Zdjęcie" width="100"></td>
            <td>{{ $picture->created_at }}</td>
            <td class="text-right">
             <a href="{{ route('picture.edit', $picture->id) }}" class="btn btn-link btn-success btn-just-icon edit">
              <i class="material-icons">dvr</i>
             </a>

             <form action="{{ route('picture.destroy' , $picture->id) }}" method="post" id="delete-form-{{$picture->id}}" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
              <a href="" onclick="
                if(confirm('Jesteś pewny, że chcesz to USUNĄĆ ???')) {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$picture->id}}').submit();
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
