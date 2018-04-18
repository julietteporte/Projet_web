<header class="row"> @include('includes.header') </header>
<div class="container"  id="main">
	<div class="row">
		<br /> <br />
		<ul class="nav nav-pills nav-justified">
			<li><a>{{__ ('cart.cart')}}</a></li>
			<li><a>{{__ ('cart.identification')}}</a></li>
			<li><a>{{__ ('cart.payment')}}</a></li>
			<li class="active"><a>{{__ ('cart.validation')}}</a></li>
		</ul>
		<br /> <br /> <br />
	</div>
	<div class="row">
		<div class="col-lg-1 col-md-1">
			<h1 class="glyphicon glyphicon-ok-circle size=50px"
				aria-hidden="true"></h1>
		</div>
		<p>
			<label>{{__ ('cart.text1')}}</label>
		</p>
		<p>
			<label>{{__ ('cart.text2')}} </label>
		</p>
		<br /> <br /> <br />
	</div>
	<div class="text-center">
		<button class="btn btn-center">{{__ ('cart.formatPDF')}}</button>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
