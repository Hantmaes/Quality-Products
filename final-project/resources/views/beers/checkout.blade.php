@extends('layouts.layout')

@section('content')
  <div class="shipping">
    <div class="billing-detail">
      <h2>Bill To</h2>
        <div class="form-group">
          <input type="text" placeholder="Billing name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Billing Address" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Billing City" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Billing State" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Billing Country" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Billing Postcode" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Billing Telephone" class="form-control" />
        </div>
        <div class="form-group">
          <input type="checkbox" class="form-check-input" id="billtoship" >
          <label class="form-check-label" for="materialUnchecked">Shipping Address same as Billing Address</label>
      </div>
    </div>

      <div class="shipping-detail">
        <h2>Ship To</h2>
        <div class="form-group">
          <input type="text" placeholder="Shipping name" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Shipping Address" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Shipping City" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Shipping State" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Shipping Country" class="form-control" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Shipping Postcode" class="form-control" />
        </div>
          <div class="form-group">
          <input type="text" placeholder="Shipping Telephone" class="form-control" />
        </div>
          <button type="submit" class="btn btn-success" href="" >Checkout</button>
      </div>  
  </div>
@endsection