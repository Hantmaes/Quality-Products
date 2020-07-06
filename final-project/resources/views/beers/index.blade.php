@extends('layouts.layout')

@section('content')

<h1>Biers Index</h1>

<div class="main">
@foreach($beers as $beer)
    <div class="beer-list">
        <img src="{{ $beer ->image }}"
        <h2>{{ $beer->product_name }}</h2>
        <p>Company: {{ $beer->company_name }}</p>

        <a href="beers/{{ $beer->id }}">more detail...</a>
    </div>
@endforeach
</div>

@endsection