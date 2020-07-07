<div class="home-header" >
  <div class="logo" >
    <img src="/images/logo.png" />
  </div>
<nav>

  @if (Route::has('login'))

      <a href="{{ url('/') }}">Home</a>

      <a href="{{ route('beers.index') }}">Beers</a>
  
      <a href="{{ route('companies.index') }}">Beer-Producers</a>

      @auth

          <a href="{{ url('/home') }}">Home</a>
          
      @else
          <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
          @endif


      @endauth
  
@endif



</nav>
</div>