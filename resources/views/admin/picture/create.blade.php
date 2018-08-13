@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-success card-header-text">
            <div class="card-text">
              <h4 class="card-title">Dodaj Galerię</h4>
            </div>
          </div>
          <div class="card-body ">
          <form method="POST" action="{{ route('picture.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <label class="col-sm-2 col-form-label">Opis galerii</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Opis galerii" value="{{ old('description') }}">
                  @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Rozdzielczość</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="resolution" class="form-control{{ $errors->has('resolution') ? ' is-invalid' : '' }}" placeholder="1440x960" value="{{ old('resolution') }}">
                  <div class="category form-category text-success">Pomiń zostawiając wartość domyślną <b>1440x960</b> lub zmień</div>
                  @if ($errors->has('resolution'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('resolution') }}</strong>
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
                    <img src="{{ asset('img/image_placeholder.jpg') }}" alt="post image">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file btn-sm">
                      <span class="fileinput-new">Wybierz zdjęcia</span>
                      <span class="fileinput-exists">Zmień</span>
                      <input type="file" name="img[]" multiple/>
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