<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
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
