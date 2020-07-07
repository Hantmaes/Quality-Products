
@extends('layouts.layout')

@section('content')

<div class="detail-beer">
  <h1>{{ $beer->product_name }}</h1>
  <h3>Price: {{ $beer->price }}</h3>
  <h3>Company: {{ $beer->company_name }}</h3>
  <img src="{{ $beer->image }}">
  <p id="description-beers">Description: {{ $beer->description }}</p>
  <p>Alcohol Content: {{ $beer->alcohol_content }}%</p>
  <p>Category: {{ $beer->category }}</p>
</div>



@endsection

