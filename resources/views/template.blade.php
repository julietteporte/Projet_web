<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>

<body>

<header>
	@include('includes.header')
</header>

@yield('content')

<footer class="nb-footer">
	@include('includes.footer')
</footer>
@yield('scripts')
</body>
</html>