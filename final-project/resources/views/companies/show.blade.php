
@extends('layouts.layout')

@section('content')

<div class="detail-company">
  <img src="{{ $company->company_logo }}">
  <h1>Company: {{ $company->company }}</h1>
  <p id="description-company"> {{ $company->company_description }}</p>
  <h3>Email address: {{ $company->company_email }}</h3>
  <h3>Number: +{{ $company->company_number }}</h3>
  <h3>Address: {{ $company->company_address }}</h3>

</div>

@endsection