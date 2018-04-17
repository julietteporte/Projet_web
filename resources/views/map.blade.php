<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <title>BDE Cesi Bordeaux</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          {!! $map['js'] !!}
</head>

<body>
  <header class="row">
    @include('includes.header')
  </header>
  <br>
  {!! $map['html'] !!}
  <br>
  <footer class="row">
      @include('includes.footer')
  </footer>
</body>
</html>
