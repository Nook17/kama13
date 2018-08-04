@extends('admin.layouts.app')
@section('content')

<div class="content">
 <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
     <div class="card">
      <div class="card-header card-header-primary card-header-icon">
       <div class="card-icon">
        <i class="material-icons">assignment</i>
       </div>
       <h4 class="card-title">DataTables.net</h4>
      </div>
      <div class="card-body">
       <div class="toolbar text-center">
        <a href="{{ route('category.create') }}" class="btn btn-success">Dodaj Kategorię</a>
       </div>
       <div class="material-datatables">
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
         <thead>
          <tr>
           <th>Lp</th>
           <th>Nazwa Kategori</th>
           <th>Slug</th>
           <th class="disabled-sorting text-right">Actions</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <th>Lp</th>
           <th>Nazwa Kategori</th>
           <th>Slug</th>
           <th class="text-right">Actions</th>
          </tr>
         </tfoot>
         <tbody>
          @foreach($categories as $category)
           <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td class="text-right">
             <a href="{{ route('category.edit', $category->slug) }}" class="btn btn-link btn-success btn-just-icon edit">
              <i class="material-icons">dvr</i>
             </a>

             <form action="{{ route('category.destroy' , $category->slug) }}" method="post" id="delete-form-{{$category->id}}" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
              <a href="" onclick="
                if(confirm('Are you sure, You Want to delete this ?')) {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$category->id}}').submit();
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
