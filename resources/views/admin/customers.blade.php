@extends("layouts.app")

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
<div class="table-responsive small">
    <table class="table table-striped table-sm table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">firstname</th>
          <th scope="col">lastname</th>
          <th scope="col">Email</th>
          <th scope="col">adress</th>
          <th scope="col">phoneno</th>
          <th scope="col">country</th>
          <th scope="col">state</th>
          <th scope="col">zipcode</th>
          <th scope="col">userid</th>

      
        </tr>
      </thead>
      <tbody>
          @foreach ($cust as $u)
        <tr>
          <td>{{$u->id}}</td>
          <td>{{$u->firstname}}</td>
          <td>{{$u->lastname}}</td>
          <td>{{$u->email}}</td>
          <td>{{$u->adress}}</td>
          <td>{{$u->phoneno}}</td>
          <td>{{$u->country}}</td>
          <td>{{$u->state}}</td>
          <td>{{$u->zipcod}}</td>
          <td>{{$u->userid}}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
@endsection