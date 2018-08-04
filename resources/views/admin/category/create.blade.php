@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Dodaj Kategorię</h4>
            </div>
          </div>
          <div class="card-body ">
          <form method="POST" action="{{ url('admin/category') }}" class="form-horizontal">
            @csrf

            <div class="row">
              <label class="col-sm-2 col-form-label">Nazwa</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Nazwa" value="{{ old('name') }}">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Nazwa linka</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="slug" class="form-control" placeholder="Link" value="{{ old('slug') }}">
                </div>
              </div>
            </div>

            <div class="card-footer justify-content-md-center">
              <button type="submit" class="btn btn-fill btn-primary">Wyślij</button>
              <a href="{{ route('category.index') }}" class="btn btn-fill btn-default ml-4">Cofnij</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection