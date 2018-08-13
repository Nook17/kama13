@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-info card-header-text">
            <div class="card-text">
              <h4 class="card-title">Edytuj Subskrybcję</h4>
            </div>
          </div>
          <div class="card-body ">
          <form method="POST" action="{{ route('newsletter.update', $newsletter->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Tytuł" value="{{ $newsletter->email }}">
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" name="status" value="1" <?= $newsletter->status ? 'checked' : '' ?>>
                      <span class="toggle"></span>
                      <?= $newsletter->status ? 'on' : 'off' ?>
                    </label>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="card-footer justify-content-md-center">
              <button type="submit" class="btn btn-fill btn-primary">Wyślij</button>
              <a href="{{ route('newsletter.index') }}" class="btn btn-fill btn-default ml-4">Cofnij</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection