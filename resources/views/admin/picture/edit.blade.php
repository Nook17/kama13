@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Edytuj Galerię</h4>
            </div>
          </div>
          <div class="card-body">
          <form method="POST" action="{{ route('picture.update', $picture->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
              <label class="col-sm-2 col-form-label">Opis galerii</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Opis galerii" value="{{ $picture->description }}">
                  @if ($errors->has('description'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-4 offset-4 text-center">
                <h4 class="title">Dodaj zdjęcia do galerii</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="{{ asset('storage/' . $picture->img) }}" alt="post image">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file btn-sm">
                      <span class="fileinput-new">Wybierz zdjęcia</span>
                      <span class="fileinput-exists">Zmień</span>
                      <input type="file" name="img"/>
                    </span>
                    <a href="extended.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Usuń</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer justify-content-md-center">
              <button type="submit" class="btn btn-fill btn-primary">Wyślij</button>
              <a href="{{ route('picture.index') }}" class="btn btn-fill btn-default ml-4">Cofnij</a>
            </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection