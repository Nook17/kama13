@extends('admin.layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Edytuj Post</h4>
            </div>
          </div>
          <div class="card-body ">
          <form method="POST" action="{{ route('post.update', $post->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
              <div class="col-md-4 col-sm-4 offset-4 text-center">
                <h4 class="title">Wstaw obrazek</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="
                    @if($post->img)
                    {{-- {{ asset('/storage/post/' . $post->img) }} --}}
                    {{ asset('storage/' . $post->img) }}
                    @else
                    {{ asset('img/image_placeholder.jpg') }}
                    @endif
                    " alt="post image">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file btn-sm">
                      <span class="fileinput-new">Wybierz obrazek</span>
                      <span class="fileinput-exists">Zmień</span>
                      <input type="file" name="img" />
                    </span>
                    <a href="extended.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Usuń</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Kategoria</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <select class="selectpicker" data-style="select-with-transition" multiple title="Kategoria" data-size="7" name="categories[]">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}"
                      @foreach($post->categories as $postCategory)
                        @if($postCategory->id == $category->id)
                          selected
                        @endif
                      @endforeach
                      >{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Tytuł</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Tytuł" value="{{ $post->title }}">
                  @if ($errors->has('title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Podtytuł</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="subtitle" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" placeholder="Podtytuł" value="{{ $post->subtitle }}">
                  @if ($errors->has('subtitle'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('subtitle') }}</strong>
                  </span>
                @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Nazwa linka</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" placeholder="Link" value="{{ $post->slug }}">
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
                  {{-- <textarea type="text" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="Teść" row="10" col="50">{{ $post->content }}</textarea> --}}
                  <textarea type="text" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{ $post->content }}</textarea>

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
              <a href="{{ route('post.index') }}" class="btn btn-fill btn-default ml-4">Cofnij</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection