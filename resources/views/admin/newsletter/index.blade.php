@extends('admin.layouts.app')
@section('content')

<div class="content">
 <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
     <div class="card">
      <div class="card-header card-header-info card-header-icon">
       <div class="card-icon">
        <i class="material-icons">local_post_office</i>
       </div>
       <h4 class="card-title">Subskrybenci</h4>
      </div>
      <div class="card-body">
       <div class="toolbar text-center">
        <a href="{{ route('newsletter_post') }}" class="btn btn-outline-danger btn-sm confirmation" onclick="if (! confirm('Na pewno wysłać wszystkim Email z powiadomieniem ???')) { return false; }">Wyślij subskrybcję</a>
       </div>
       <div class="material-datatables">
        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
         <thead>
          <tr>
           <th>Lp</th>
           <th>Email</th>
           <th>Status</th>
           <th>Data</th>
           <th class="disabled-sorting text-right">Actions</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <th>Lp</th>
           <th>Email</th>
           <th>Status</th>
           <th>Data</th>
           <th class="text-right">Actions</th>
          </tr>
         </tfoot>
         <tbody>
          @foreach($newsletters as $newsletter)
           <tr>
            <td>{{ $newsletter->id }}</td>
            <td>{{ $newsletter->email }}</td>
            <td>{{ $newsletter->status }}</td>
            <td>{{ $newsletter->created_at }}</td>
            <td class="text-right">
             <a href="{{ route('newsletter.edit', $newsletter->id) }}" class="btn btn-link btn-success btn-just-icon edit">
              <i class="material-icons">dvr</i>
             </a>

             <form action="{{ route('newsletter.destroy' , $newsletter->id) }}" method="post" id="delete-form-{{$newsletter->id}}" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
              <a href="" onclick="
                if(confirm('Jesteś pewny, że chcesz to USUNĄĆ ???')) {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$newsletter->id}}').submit();
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
