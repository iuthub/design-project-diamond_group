@extends('layouts.master')

@section('title')
Shopping Cart
@endsection

@section('content')
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  @if(Session::has('cart'))
  <div class="row">
    <div class="col-md-5 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">
          {{$totalQty}}
        </span>
      </h4>
      <ul class="list-group mb-3">
        @foreach($products as $product)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">
              {{$product['item']['title']}}
              <span class="text-muted float-right"><span class="badge badge-secondary badge-pill">{{$product['qty']}}</span> x ${{$product['item']['price']}} = ${{$product['price']}}</span>
            </h6>
            <small class="text-muted">{{$product['item']['description']}}</small>

            <div class="btn-group">
              <a class="btn btn-sm btn-outline-secondary" href="{{route('product.reduceByOne', ['id' => $product['item']['id']])}}">-</a>
              <a class="btn btn-sm btn-outline-secondary" href="{{route('product.remove', ['id' => $product['item']['id']])}}">Delete</a>
            </div>
          </div>
        </li>
        @endforeach
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>${{$totalPrice}}</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-7 order-md-1">
      <h4 class="mb-3">Billing address</h4>

      <form class="needs-validation" novalidate>
        <div class="row">

          <div class="col-md-6 mb-3">
             <label for="firstname">First name</label>
            <input type="text" class="form-control" id="firstname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" id="lastname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
           <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


        <hr class="mb-4">

        <div class="mb-3">
          <label for="phonenumber">Phone Number</label>
          <input type="text" class="form-control" id="phonenumber" placeholder="99897 7000000" required>
          <div class="invalid-feedback">
            Please enter your Phone number.
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>
  @else
  <div class="row">
    <div>
      <h2>No Items in Cart!</h2>
    </div>
  </div>
  @endif


</div>
@endsection

@section('scripts')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection
