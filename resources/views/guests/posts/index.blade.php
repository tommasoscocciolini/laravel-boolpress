@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- <a href="{{route('admin.posts.create')}}">Crea Post</a> -->
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
                  {{$post->content}}

                  <div class="">
                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">Read More...</a>
                  </div>
              </div>
          </div>
      </div>
      @endforeach

    </div>
</div>
@endsection
