@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Nuovo Post</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="title">Title</label>
          <input  class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ old('title', $post->title) }}">
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"  value="{{old('content')}}">{{old('conmtent', $post->content)}}</textarea>
          @error('content')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <button type="submit" class="btn btn-primary">Salva</button>

      </form>
    </div>

  </div>
</div>
@endsection
