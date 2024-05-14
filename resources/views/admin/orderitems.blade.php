@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
<div class="col-md-12">
  <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">userid</th>
            <th scope="col">itemid</th>
            <th scope="col">orderid</th>
            <th scope="col">quantity</th>
            {{-- <th scope="col">Action</th> --}}
        
          </tr>
        </thead>
        <tbody>
            @foreach ($orderitems as $u)
          <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->userid}}</td>
            <td>{{$u->order_id}}</td>
            <td>{{$u->item_id}}</td>
            <td>{{$u->quantity}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
    

@endsection
