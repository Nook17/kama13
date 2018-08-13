@extends('admin.layouts.app')
@section('content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
	      <div class="card ">
          <div class="card-header card-header-info card-header-text">
            <div class="card-text">
            	<div class="card-title">
								<blockquote class="blockquote">
	              	<h4>Kontakt od: <span class="text-dark"><b>{{ $contact->nick }}</b></span></h4>
	              	<footer class="blockquote-footer"><cite title="Source Title"><small>{{ $contact->created_at }}</small></cite></footer>
								</blockquote>
              </div>
            </div>
          </div>
	        <div class="card-body">
						<p class="mt-3">{{ $contact->message }}</p>
	        </div> <!-- card-body -->
					<div class="card-footer justify-content-md-center">
						<a href="{{ route('contact.index') }}" class="btn btn-outline-primary btn-sm">Cofnij</a>
					</div>
	      </div> <!-- card -->
			</div>
		</div>
	</div>
</div>

@endsection