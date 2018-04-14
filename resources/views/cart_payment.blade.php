<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<header class="row">
	    @include('includes.header')
	  </header>


<div class="container">
	<div class="row">
		<br /> <br />
		<ul class="nav nav-pills nav-justified">
			<li><a>PANIER</a></li>
			<li><a>IDENTIFICATION</a></li>
			<li class="active"><a>PAIEMENT</a></li>
			<li><a>VALIDATION</a></li>
		</ul>
		<br /> <br /> <br />
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12">
			<label>Choisissez ci-dessous votre mode de paiement</label>
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
						</a>

						Ordre "BDE CESI Bordeaux" | A remettre au tr�sorier de l'association
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-12 col-md-12 sb-preview">
						<a class="btn btn-lg bouton_home" role="button" href=""><label>ESPECES</label>
						</a>
												A remettre au tr�sorier de l'association
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="row">
  @include('includes.footer')
</footer>
