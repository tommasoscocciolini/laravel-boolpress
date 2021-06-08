@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.posts.create')}}">Crea Post</a>
    </div>
  </div>
    <div class="row justify-content-center">
      @foreach ($posts as $post)
      <div class="col-md-3">
          <div class="card">
              <div class="card-header">{{ $post->title }}
                @if ($post->category)
                <i><a href="{{route('category.index', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a></i></h4>
                @endif
               </div>

              <div class="card-body">
                <img src="{{asset($post->cover)}}" alt="{{$post->title}}" height="80">
                  {{$post->content}}
                  <div class="mt-4">
                    <a class="btn btn-primary" href="{{route('admin.posts.show', ['post'=> $post->id])}}">Show</a>
                    <a class="btn btn-primary" href="{{route('admin.posts.edit', ['post'=> $post->id])}}">Edit</a>
                    <a class="btn btn-danger" onclick="event.preventDefault();
                    this.nextElementSibling.submit();" href="{{route('admin.posts.show', ['post'=> $post->id])}}">Delete</a>
                    <form style="display:none;" action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                    </form>
                  </div>
              </div>
          </div>
      </div>
      @endforeach

    </div>
</div>
@endsection
