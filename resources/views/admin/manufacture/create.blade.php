@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Dodaj Produkt</h4>
            </div>
          </div>
          <div class="card-body ">
          <form method="POST" action="{{ route('manufacture.store') }}" class="form-horizontal">
            @csrf

            <div class="row">
             <label class="col-sm-2 col-form-label">Galeria</label>
             <div class="col-sm-10">
               <div class="form-group">
                 <select class="selectpicker" data-style="select-with-transition" multiple title="Galeria" data-size="15" name="pictures[]">
                   @foreach($pictures as $picture)
                     <option value="{{ $picture->id }}">{{ $picture->description }}</option>
                   @endforeach
                 </select>
               </div>
             </div>
           </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Kategoria</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <select class="selectpicker" data-style="select-with-transition" multiple title="Kategoria" data-size="15" name="categories[]">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Tytuł</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Tytuł" value="{{ old('title') }}">
                  @if ($errors->has('title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Nazwa linka</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" placeholder="Link" value="{{ old('slug') }}">
                  @if ($errors->has('slug'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('slug') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Treść</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <textarea type="text" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="Teść" row="10" col="50">{{ old('content') }}</textarea>
                  @if ($errors->has('content'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('content') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>
            <div class="card-footer justify-content-md-center">
              <button type="submit" class="btn btn-fill btn-primary">Wyślij</button>
              <a href="{{ route('manufacture.index') }}" class="btn btn-fill btn-default ml-4">Cofnij</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection