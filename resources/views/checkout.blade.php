@extends('layouts.app')
@section('content')
<style type="text/css">
    	body{margin-top:20px;
background-color: #f1f3f7;
}

.card {
    margin-bottom: 24px;
    -webkit-box-shadow: 0 2px 3px #e4e8f0;
    box-shadow: 0 2px 3px #e4e8f0;
}
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eff0f2;
    border-radius: 1rem;
}
.activity-checkout {
    list-style: none
}

.activity-checkout .checkout-icon {
    position: absolute;
    top: -4px;
    left: -24px
}

.activity-checkout .checkout-item {
    position: relative;
    padding-bottom: 24px;
    padding-left: 35px;
    border-left: 2px solid #f5f6f8
}

.activity-checkout .checkout-item:first-child {
    border-color: #3b76e1
}

.activity-checkout .checkout-item:first-child:after {
    background-color: #3b76e1
}

.activity-checkout .checkout-item:last-child {
    border-color: transparent
}

.activity-checkout .checkout-item.crypto-activity {
    margin-left: 50px
}

.activity-checkout .checkout-item .crypto-date {
    position: absolute;
    top: 3px;
    left: -65px
}



.avatar-xs {
    height: 1rem;
    width: 1rem
}

.avatar-sm {
    height: 2rem;
    width: 2rem
}

.avatar {
    height: 3rem;
    width: 3rem
}

.avatar-md {
    height: 4rem;
    width: 4rem
}

.avatar-lg {
    height: 5rem;
    width: 5rem
}

.avatar-xl {
    height: 6rem;
    width: 6rem
}

.avatar-title {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #3b76e1;
    color: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    font-weight: 500;
    height: 100%;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%
}

.avatar-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 8px
}

.avatar-group .avatar-group-item {
    margin-left: -8px;
    border: 2px solid #fff;
    border-radius: 50%;
    -webkit-transition: all .2s;
    transition: all .2s
}

.avatar-group .avatar-group-item:hover {
    position: relative;
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px)
}

.card-radio {
    background-color: #fff;
    border: 2px solid #eff0f2;
    border-radius: .75rem;
    padding: .5rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block
}

.card-radio:hover {
    cursor: pointer
}

.card-radio-label {
    display: block
}

.edit-btn {
    width: 35px;
    height: 35px;
    line-height: 40px;
    text-align: center;
    position: absolute;
    right: 25px;
    margin-top: -50px
}

.card-radio-input {
    display: none
}

.card-radio-input:checked+.card-radio {
    border-color: #3b76e1!important
}


.font-size-16 {
    font-size: 16px!important;
}
.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

a {
    text-decoration: none!important;
}


.form-control {
    display: block;
    width: 100%;
    padding: 0.47rem 0.75rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #545965;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e2e5e8;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.75rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}

.edit-btn {
    width: 35px;
    height: 35px;
    line-height: 40px;
    text-align: center;
    position: absolute;
    right: 25px;
    margin-top: -50px;
}

.ribbon {
    position: absolute;
    right: -26px;
    top: 20px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    padding: 1px 22px;
    font-size: 13px;
    font-weight: 500
}




    </style>

<div class="container">
<div class="row">
<div class="col-xl-8">
<div class="card">
<div class="card-body">
<ol class="activity-checkout mb-0 px-4 mt-3">
<li class="checkout-item">
<div class="avatar checkout-icon p-1">
<div class="avatar-title rounded-circle bg-primary">
<i class="bx bxs-receipt text-white font-size-20"></i>
</div>
</div>
<div class="feed-item-list">
<div>
<h5 class="font-size-16 mb-1">Billing Info</h5>
<p class="text-muted text-truncate mb-4">Sed ut perspiciatis unde omnis iste</p>
<div class="mb-3">
<form action="{{route("order")}}" method="post" id="payment-form">
  @csrf
<div>
<div class="row">
<div class="col-lg-4">
<div class="mb-3">
<label class="form-label" for="billing-name">Name</label>
<input type="text" class="form-control" id="billing-name" placeholder="Enter name" name="firstname">
</div>
</div>
<div class="col-lg-4">
<div class="mb-3">
<label class="form-label" for="billing-email-address">Email Address</label>
<input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" name="email">
</div>
</div>
<div class="col-lg-4">
<div class="mb-3">
<label class="form-label" for="billing-phone">Phone</label>
<input type="text" class="form-control" id="billing-phone" placeholder="Enter Phone no." name="phoneno">
</div>
</div>
</div>
<div class="mb-3">
<label class="form-label" for="billing-address">Address</label>
<textarea class="form-control" id="billing-address" rows="3" placeholder="Enter full address" name="adress"></textarea>
</div>
<div class="row">
<div class="col-lg-4">
<div class="mb-4 mb-lg-0">
<label class="form-label">Country</label>
<select class="form-control form-select" title="Country" name="country">
<option value="0">Select Country</option>
<option value="AF">pakistab</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
</select>
</div>
</div>
<div class="col-lg-4">
<div class="mb-4 mb-lg-0">
<label class="form-label" for="billing-city">City</label>
<input type="text" class="form-control" id="billing-city" placeholder="Enter City" name="city">
</div>
</div>
<div class="col-lg-4">
<div class="mb-0">
<label class="form-label" for="zip-code">Zip / Postal code</label>
<input type="text" class="form-control" id="zip-code" placeholder="Enter Postal code" name="zipcod">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="checkout-item">
<div class="avatar checkout-icon p-1">
<div class="avatar-title rounded-circle bg-primary">
<i class="bx bxs-truck text-white font-size-20"></i>
</div>
</div>
<div class="feed-item-list">
<div>
<h5 class="font-size-16 mb-1">Shipping Info</h5>
<p class="text-muted text-truncate mb-4">Neque porro quisquam est</p>
<div class="mb-3">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div data-bs-toggle="collapse">
<label class="card-radio-label mb-0">
<input type="radio" name="address" id="info-address1" class="card-radio-input" checked>
<div class="card-radio text-truncate p-3">
<span class="fs-14 mb-4 d-block">Address 1</span>
<span class="fs-14 mb-2 d-block">Bradley McMillian</span>
<span class="text-muted fw-normal text-wrap mb-1 d-block">109 Clarksburg Park Road Show Low, AZ 85901</span>
<span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
</div>
</label>
<div class="edit-btn bg-light  rounded">
<a href="#" data-bs-toggle="tooltip" data-placement="top" title data-bs-original-title="Edit">
<i class="bx bx-pencil font-size-16"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div>
<label class="card-radio-label mb-0">
<input type="radio" name="address" id="info-address2" class="card-radio-input">
<div class="card-radio text-truncate p-3">
<span class="fs-14 mb-4 d-block">Address 2</span>
<span class="fs-14 mb-2 d-block">Bradley McMillian</span>
<span class="text-muted fw-normal text-wrap mb-1 d-block">109 Clarksburg Park Road Show Low, AZ 85901</span>
<span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
</div>
</label>
<div class="edit-btn bg-light  rounded">
<a href="#" data-bs-toggle="tooltip" data-placement="top" title data-bs-original-title="Edit">
<i class="bx bx-pencil font-size-16"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="checkout-item">
<div class="avatar checkout-icon p-1">
<div class="avatar-title rounded-circle bg-primary">
<i class="bx bxs-wallet-alt text-white font-size-20"></i>
</div>
</div>
<div class="feed-item-list">
<div>
<h5 class="font-size-14 mb-3">Payment method :</h5>
</div>
</div>
<div class="container">
  <div class="row">
    <!-- Left -->
    <div class="col-lg-9">
      <div class="accordion" id="accordionPayment">
        <label for="card-element">
          Credit or debit card
        </label>
        <div id="card-element">
          <!-- A Stripe Element will be inserted here. -->
        </div>
    
        <!-- Used to display Element errors. -->
        <div id="card-errors" role="alert"></div>
      </div>
    
      <button class="btn btn-success">Submit Payment</button>
        
          </div>
        </div>
      
        <div class="accordion-item mb-3 border">
          <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
            <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePP" aria-expanded="false">
              <input class="form-check-input" type="radio" name="payment" id="payment2">
              <label class="form-check-label pt-1" for="payment2">
              Cash on Delivery
              </label>
            </div>
            <span>
              {{-- <svg width="103" height="25" xmlns="">
                <g fill="none" fill-rule="evenodd">
                  <path d="M8.962 5.857h7.018c3.768 0 5.187 1.907 4.967 4.71-.362 4.627-3.159 7.187-6.87 7.187h-1.872c-.51 0-.852.337-.99 1.25l-.795 5.308c-.052.344-.233.543-.505.57h-4.41c-.414 0-.561-.317-.452-1.003L7.74 6.862c.105-.68.478-1.005 1.221-1.005Z" fill="#009EE3"></path>
                  <path d="M39.431 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.81c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.416 0-.561-.267-.469-.863l2.158-13.846c.106-.68.362-.934.827-.934h6.263Zm-4.257 7.413h2.129c1.331-.051 2.215-.973 2.304-2.636.054-1.027-.64-1.763-1.743-1.757l-2.003.009-.687 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.043.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.432-8.982c.072-.451-.039-.672-.38-.672H53.05c-.23 0-.343.128-.402.48l-.095.552c-.049.288-.18.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.581.074-5.996 2.793-6.255 6.279-.2 2.696 1.732 4.813 4.279 4.813 1.848 0 2.674-.543 3.605-1.395l-.007-.005Zm-1.946-1.382c-1.542 0-2.616-1.23-2.393-2.738.223-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.394 2.737-.223 1.508-1.664 2.738-3.207 2.738Zm11.685-7.971h-2.355c-.486 0-.683.362-.53.808l2.925 8.561-2.868 4.075c-.241.34-.054.65.284.65h2.647a.81.81 0 0 0 .786-.386l8.993-12.898c.277-.397.147-.814-.308-.814H67.6c-.43 0-.602.17-.848.527l-3.75 5.435-1.676-5.447c-.098-.33-.342-.511-.793-.511h-.002Z" fill="#113984"></path>
                  <path d="M79.768 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.808c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.417 0-.562-.267-.47-.863l2.162-13.85c.107-.68.362-.934.828-.934h6.257v.004Zm-4.257 7.413h2.128c1.332-.051 2.216-.973 2.305-2.636.054-1.027-.64-1.763-1.743-1.757l-2.004.009-.686 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.044.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.431-8.982c.073-.451-.038-.672-.38-.672h-2.55c-.23 0-.343.128-.403.48l-.094.552c-.049.288-.181.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.582.074-5.997 2.793-6.256 6.279-.199 2.696 1.732 4.813 4.28 4.813 1.847 0 2.673-.543 3.604-1.395l-.01-.005Zm-1.944-1.382c-1.542 0-2.616-1.23-2.393-2.738.222-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.393 2.737-.223 1.508-1.665 2.738-3.206 2.738Zm10.712 2.489h-2.681a.317.317 0 0 1-.328-.362l2.355-14.92a.462.462 0 0 1 .445-.363h2.682a.317.317 0 0 1 .327.362l-2.355 14.92a.462.462 0 0 1-.445.367v-.004Z" fill="#009EE3"></path>
                  <path d="M4.572 0h7.026c1.978 0 4.326.063 5.895 1.45 1.049.925 1.6 2.398 1.473 3.985-.432 5.364-3.64 8.37-7.944 8.37H7.558c-.59 0-.98.39-1.147 1.449l-.967 6.159c-.064.399-.236.634-.544.663H.565c-.48 0-.65-.362-.525-1.163L3.156 1.17C3.28.377 3.717 0 4.572 0Z" fill="#113984"></path>
                  <path d="m6.513 14.629 1.226-7.767c.107-.68.48-1.007 1.223-1.007h7.018c1.161 0 2.102.181 2.837.516-.705 4.776-3.793 7.428-7.837 7.428H7.522c-.464.002-.805.234-1.01.83Z" fill="#172C70"></path>
                </g>
              </svg> --}}
            </span>
          </h2>
        </div>
      </div>
    </div>
</ol>
</div>
</div>
<div class="row my-4">
<div class="col">
<a href="ecommerce-products.html" class="btn btn-link text-muted">
<i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
</div> 
<div class="col">
{{-- <div class="text-end mt-2 mt-sm-0">
<a href="#" class="btn btn-success">
<i class="mdi mdi-cart-outline me-1"></i> Procced </a>
</div> --}}
</div> 
</div> 
</div>
</form>
{{-- <form action="/charge" method="post" id="payment-form">
  @csrf
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form> --}}
{{-- <div class="col-xl-4">
<div class="card checkout-order-summary">
<div class="card-body">
<div class="p-3 bg-light mb-3">
<h5 class="font-size-16 mb-0">Order Summary <span class="float-end ms-2">#MN0124</span></h5>
</div>
<div class="table-responsive">
<table class="table table-centered mb-0 table-nowrap">
<thead>
<tr>
<th class="border-top-0" style="width: 110px;" scope="col">Product</th>
<th class="border-top-0" scope="col">Product Desc</th>
<th class="border-top-0" scope="col">Price</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row"><img src="https://www.bootdey.com/image/280x280/FF00FF/000000" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
<td>
<h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">Waterproof Mobile Phone</a></h5>
<p class="text-muted mb-0">
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star-half text-warning"></i>
</p>
<p class="text-muted mb-0 mt-1">$ 260 x 2</p>
</td>
<td>$ 520</td>
</tr>
<tr>
<th scope="row"><img src="https://www.bootdey.com/image/280x280/FF00FF/000000" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
<td>
<h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">Smartphone Dual Camera</a></h5>
<p class="text-muted mb-0">
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
</p>
<p class="text-muted mb-0 mt-1">$ 260 x 1</p>
</td>
<td>$ 260</td>
</tr>
<tr>
<td colspan="2">
<h5 class="font-size-14 m-0">Sub Total :</h5>
</td>
<td>
$ 780
</td>
</tr>
<tr>
<td colspan="2">
<h5 class="font-size-14 m-0">Discount :</h5>
</td>
<td>
- $ 78
</td>
</tr>
<tr>
<td colspan="2">
<h5 class="font-size-14 m-0">Shipping Charge :</h5>
</td>
<td>
$ 25
</td>
</tr>
<tr>
<td colspan="2">
<h5 class="font-size-14 m-0">Estimated Tax :</h5>
</td>
<td>
$ 18.20
</td>
</tr>
<tr class="bg-light">
<td colspan="2">
<h5 class="font-size-14 m-0">Total:</h5>
</td>
<td>
$ 745.2
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div> --}}
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
<script src="https://js.stripe.com/v3/"></script>
<script>
  // Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/apikeys
const stripe = Stripe('pk_test_51OaahQIqNsJyL6cC0NsOxX1u8jIKwyETpMT0W1hhzfB1gJfMAniip5eLXJOtnHsQQsHHynrG56of1wRpeQNsyccN00hTArFV28');
const elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
const style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
};

// Create an instance of the card Element.
const card = elements.create('card', {style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Create a token or display an error when the form is submitted.
const form = document.getElementById('payment-form');
form.addEventListener('submit', async (event) => {
  event.preventDefault();

  const {token, error} = await stripe.createToken(card);

  if (error) {
    // Inform the customer that there was an error.
    const errorElement = document.getElementById('card-errors');
    errorElement.textContent = error.message;
  } else {
    // Send the token to your server.
    stripeTokenHandler(token);
  }
});
const stripeTokenHandler = (token) => {
  // Insert the token ID into the form so it gets submitted to the server
  const form = document.getElementById('payment-form');
  const hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>
@endsection