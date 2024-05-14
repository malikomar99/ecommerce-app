@extends('layouts.app')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="addproduct" class="btn btn-success">add new product</a>
         

        </div>
      </div>
    </div>
              <h2>Product Section </h2>
              @if(session('massage'))
              <div class="alert alert-success id=msg-box">
                  {{session('massage')}}
              @endif
              <div class="table-responsive small">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      
                      <th scope="col">img</th>
                      <th scope="col">title</th>
                      <th scope="col">description</th>
                      <th scope="col">price</th>
                      <th scope="col">quantity</th>
                      <th scope="col">action</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $pro)
                    <tr>
                      <td><img src="{{$pro->images}}" class="card-img-top" alt="..." width="50px" height="50px"></td>
                      <td>{{$pro->title}}</td>
                      <td>{{$pro->description}}</td>
                      <td>{{$pro->price}}</td>
                      <td>{{$pro->quantity}}</td>
                      <td><a onclick="return confirm('you want to delete user?')" href="{{route('deleteproduct', ['id'=>$pro->id])}}" class="btn btn-danger">delete</a></td>
                      <td><a href="{{route('editproduct', ['id'=>$pro->id])}}" class="btn btn-primary">update</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </main>
@endsection
