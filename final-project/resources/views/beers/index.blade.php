@extends('layouts.layout')

@section('content')

<h1>Biers Index</h1>

@foreach($beers as $beer)
    <div>
        <h2>{{ $beer->product_name }}</h2>
        <p>Company: {{ $beer->company_name }}</p>

        <a href="beers/{{ $beer->id }}">more detail...</a>
    </div>
@endforeach

@endsection