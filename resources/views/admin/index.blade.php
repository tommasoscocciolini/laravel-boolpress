@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
        <h4>Admin Dashboard:</h4>
        <a class="btn btn-primary my-4" href="{{route('admin.posts.index')}}">Show Posts</a>
        <a class="btn btn-primary my-4" href="{{route('admin.categories.index')}}">Show Categories</a>

      </div>
  </div>
  <div class="row justify-content-center">
      <div class="col-md-8">

      </div>
  </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Dashboard') }}</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  {{ __('You are logged in!') }}
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
