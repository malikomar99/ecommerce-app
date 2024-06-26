@extends('layouts.app')
@section('content')
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
  
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            <div>
              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a></p>
            </div>
          </div>
          @php $total = 0; @endphp
  @if (Session::has('cart'))
  @foreach ( Session::get('cart') as $cart)
  
          <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img
                    src="{{$cart['images']}}"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2">{{$cart['title']}}</p>
                  <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>
  
                  <input id="form1" min="0" name="quantity" value="1" type="number"
                    class="form-control form-control-sm" />
  
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0">{{$cart['price']}}</h5>
                </div>
                @php
                $total += $cart['price'] * $cart['quantity']
               @endphp
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  <a onclick=" return confirm ('are you sure to delete the items.')" href="{{route('removeitems', ['id'=>$cart['id']])}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
  @endforeach
  @else
  <div class="alert alert-info">
    no items in your cart
  </div>

  @endif
          
          {{-- <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div data-mdb-input-init class="form-outline flex-fill">
                <input type="text" id="form1" class="form-control form-control-lg" />
                <label class="form-label" for="form1">Discound code</label>
              </div>
              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-warning btn-lg ms-3">Apply</button>
            </div>
          </div> --}}
          <div class="col-lg-4">
            <div class="total-section">
              <table class="total-table">
                <thead class="total-table-head">
                  <tr class="table-total-row">
                    <th>Total</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="total-data">
                    <td><strong>Subtotal: </strong></td>
                    <td>${{$total}}</td>
                  </tr>
                  <tr class="total-data">
                    <td><strong>Shipping: </strong></td>
                    <td>$45</td>
                  </tr>
                  <tr class="total-data">
                    <td><strong>Total: </strong></td>
                    <td>  {{$total + 45 }}</td>
                  </tr>
                </tbody>
              </table>
              
            </div>
        
            
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block btn-lg">Proceed to Pay</button> --}}
              <a type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block btn-lg" href="{{route('checkout')}}">Proceed to Pay</a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
  @endsection