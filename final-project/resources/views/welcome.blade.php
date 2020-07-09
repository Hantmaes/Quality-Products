@extends('layouts.layout')

@section('content')

    <div class="new-container">
        <h1>New Beers</h1>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img id="main-image" src="https://www.hbrebel.cz/photos/texty/p/0/151.png" alt="Los Angeles" >
                <h4><strong>REBEL</strong></h4>
              </div>
              <div class="carousel-item">
                <img id="main-image" src="https://www.hbrebel.cz/photos/texty/p/0/150.png" alt="Chicago" >
                <h4><strong>REBEL 0.0</strong></h4>
              </div>
              <div class="carousel-item">
                <img id="main-image" src="https://www.hbrebel.cz/photos/texty/p/0/149.png" alt="New York" >
                <h4><strong>REBEL XI</strong></h4>
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
    </div>


    <div class="new-container" >
        <h1>New Beer Producers</h1>
        <div id="demo1" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo1" data-slide-to="0" class="active"></li>
            <li data-target="#demo1" data-slide-to="1"></li>
            <li data-target="#demo1" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img id="main-image" src="https://www.bernard.cz/img/u/logo-bernard-large-v02.png" alt="Los Angeles" >
              <h4><strong>Bernard pivo</strong></h4>
            </div>
            <div class="carousel-item">
              <img id="main-image" src="https://pivovarcernahora.cz/wp-content/uploads/2020/04/Logo_CH_upravy_2016.png" alt="Chicago" >
              <h4><strong>Pivovar Černá Hora</strong></h4>
            </div>
            <div class="carousel-item">
              <img id="main-image" src="https://www.hbrebel.cz/img/logo_rebel.png" alt="New York" >
              <h4><strong>Měšťanský pivovar Havlíčkův Brod</strong></h4>
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    </div>


@endsection
