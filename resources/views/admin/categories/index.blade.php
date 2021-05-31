@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.categories.create')}}">Crea Categoria</a>
    </div>
  </div>
    <div class="row justify-content-center">
      @foreach ($categories as $category)
      <div class="col-md-3">
          <div class="card">
              <div class="card-header">{{ $category->name }}

               </div>

              <div class="card-body">
                  <div class="">
                    <a href="{{route('admin.categories.show', ['category'=> $category->id])}}">Show</a>
                    <a href="{{route('admin.categories.edit', ['category'=> $category->id])}}">Edit</a>
                    <a class="btn btn-danger" onclick="event.preventDefault();
                    this.nextElementSibling.submit();">Delete</a>
                    <form style="display:none;" action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="post">
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
