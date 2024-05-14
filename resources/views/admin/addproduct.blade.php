{{-- @php $show_menu = false;  @endphp --}}
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-12">
    @if(Session::has('success'))
<p class="alert alert-success">
  {{session::get('success')}}
 @endif
<form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input type="file" class="form-control-file" id="images" name="images">
     
    </div>
          @error('images')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>

        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{ old('title') }}">
    </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">description</label>

        <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description" value="{{ old('description') }}">
    </div>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">quantity</label>

        <input type="text" class="form-control" id="quantity" aria-describedby="emailHelp" name="quantity" value="{{old('quantity')}}">
    </div>
    @error('quantity')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">price</label>

        <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price" value="{{old('price')}}">
    </div>
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">
          submit
        </button>
    </div>

  </form>
</div>
</div>

@endsection 