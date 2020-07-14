<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="/images/logo.png" type="image/gif" sizes="32x32">

  <!-- Scripts -->
 

  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  
  <title>Final project</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="icon" href="/images/favicon1.jpg" type="image/gif" sizes="32x32">

  @yield('head')

</head>

<body>
  
  @include('partials.header')
  

  @yield('content')

  @include('partials.footer')
  @yield('scripts')
  @yield('js')

  
  
</body>
</html>