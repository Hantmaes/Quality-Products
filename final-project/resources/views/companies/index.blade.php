@extends('layouts.layout')

@section('content')

<h1>Company Lists</h1>

<div class="main-company">
@foreach($companies as $company)
    <div class="company-list">
        <img src="{{ $company ->company_logo }}"
        <h2>{{ $company->company }}</h2>
        <a href="companies/{{ $company->id }}">more detail...</a>
    </div>
@endforeach
</div>

@endsection