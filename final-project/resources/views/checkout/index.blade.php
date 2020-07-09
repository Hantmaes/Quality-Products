@extends('layouts.layout')

@section('content')
  <div class="shipping">
  <form action="{{ action('DeliveryAddressController@store')}}" method="post">
    @csrf
      <div class="shipping-detail">
        <h1>Ship To</h1>
        <div class="form-group">
          <input type="text" name="name" placeholder="Shipping name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="address" placeholder="Shipping Address" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="city" placeholder="Shipping City" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="state" placeholder="Shipping State" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="country" placeholder="Shipping Country" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" name="postcode" placeholder="Shipping Postcode" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" name="telephone" placeholder="Shipping Telephone" class="form-control" />
        </div>
          <button type="submit" class="btn btn-success" href="/payments" >Checkout</button>
      </div> 
    </form> 
  </div>
@endsection