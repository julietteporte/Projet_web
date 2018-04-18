<header class="row"> @include('includes.header') </header>
<div class="container">
	<div class="row">
		<br /> <br />
		<ul class="nav nav-pills nav-justified">
			<li><a>{{__ ('cart.cart')}}</a></li>
			<li><a>{{__ ('cart.identification')}}</a></li>
			<li class="active"><a>{{__ ('cart.payment')}}</a></li>
			<li><a>{{__ ('cart.validation')}}</a></li>
		</ul>
		<br /> <br /> <br />
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<label>{{__ ('cart.choosePayment')}}</label>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-12 col-md-12 sb-preview">
						<a class="btn btn-lg bouton_home" role="button" href=""> <label>PAYPAL</label>
						</a>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-12 col-md-12 sb-preview">
						<a class="btn btn-lg bouton_home" role="button" href=""><label>CHEQUE</label>
						</a> Ordre "BDE CESI Bordeaux" | {{__ ('cart.giveTreasurer')}}
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-12 col-md-12 sb-preview">
						<a class="btn btn-lg bouton_home" role="button" href=""><label>ESPECES</label>
						</a> {{__ ('cart.giveTreasurer')}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
