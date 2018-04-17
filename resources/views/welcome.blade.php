<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <title>BDE Cesi Bordeaux</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <header class="row">
    @include('includes.header')
  </header>
  <div class="container">
    <div class="text-center">
      <h1><b>
      {{ __('home.welcome') }}
      </b></h1><br><br>
      <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="pictures/photo1.jpg" width="1500px" height="1000px">
            </div>
            <div class="item">
              <img src="pictures/photo2.jpg" width="1500px" height="1000px">
            </div>
            <div class="item">
              <img src="pictures/photo3.jpg" width="1500px" height="1000px">
            </div>
            <div class="item">
              <img src="pictures/photo4.jpg" width="1500px" height="1000px">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
<footer class="row">
  @include('includes.footer')
</footer>
</html>