
@extends('layouts.layout')

@section('content')

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<div class="detail-beer">
  <h1>{{ $beer->product_name }}</h1>
  <h3>Price: €{{ $beer->alcohol_content }}</h3>
  <h3>Company: {{ $beer->company_name }}</h3>
  <img src="{{ $beer->image }}">
  <p id="description-beers">Description: {{ $beer->description }}</p>
  <p>Alcohol Content: {{ $beer->alcohol_content }}%</p>
  <p>Category: {{ $beer->category }}</p>

  <p class="btn-holder"><a href="{{ url('add-to-cart/'.$beer->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>

  
</div>



@endsection

