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
			<li><a>PAIEMENT</a></li>
			<li class="active"><a>VALIDATION</a></li>
		</ul>
		<br /> <br /> <br />
	</div>

	<div class="row">
		<div class="col-lg-1 col-md-1">
			<h1 class="glyphicon glyphicon-ok-circle size=50px"
				aria-hidden="true"></h1>
		</div>
			<p><label>Merci,</label></p><p><label>
			Votre commande a bien �t� prise en compte, un mail va vous �tre
			envoy�.</label></p> <br /> <br /> <br />


	</div>

	<div class="text-center">

		<button class="btn btn-center">Cliquez ici pour obtenir votre
			facture au format PDF</button>

	</div>
</div>

<footer class="row">
  @include('includes.footer')
</footer>
