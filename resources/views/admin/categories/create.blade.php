@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Nuova Categoria</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{route('admin.categories.store')}}" method="post">
        @csrf
        @method('POST')


        <div class="form-group">
          <label for="name">name</label>
          <input  class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{old('name')}}">
          @error('name')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

      </form>
    </div>

  </div>
</div>
@endsection
