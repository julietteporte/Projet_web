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
			<li class="active"><a>PANIER</a></li>
			<li><a>IDENTIFICATION</a></li>
			<li><a>PAIEMENT</a></li>
			<li><a>VALIDATION</a></li>
		</ul>
		<br /> <br /> <br />
	</div>

	<div class="row">
		<div class="col-lg-7 col-md-7 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group col-lg-4 col-md-4">
						<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
							alt="image" height="150" width="150">
					</div>
					<div class="col-lg-5 col-md-5">
						<h4>NOM DU PRODUIT</h4>
						<p>Cat�gorie : xxx</p>
						<p>SUPPRIMER</p>
					</div>
					<div class="col-lg-3 col-md-3">
						<p>Prix unitaire : 00,00</p>
						<p>Quantit� : xxx</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group col-lg-4 col-md-4">
						<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
							alt="image" height="150" width="150">
					</div>
					<div class="col-lg-5 col-md-5">
						<h4>NOM DU PRODUIT</h4>
						<p>Cat�gorie : xxx</p>
						<p>SUPPRIMER</p>
					</div>
					<div class="col-lg-3 col-md-3">
						<p>Prix unitaire : 00,00</p>
						<p>Quantit� : xxx</p>
					</div>
				</div>
			</div>

		</div>

		<div class="col-lg-4 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4>RECAPITULATIF DE LA COMMANDE</h4>
					<div class="text-center">
						<label>TOTAL TTC : </label> PRIX
					</div>
					<div class="panel-body text-center">
						<button class="btn" role="button">CHOISIR UN MOYEN DE
							PAIEMENT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<footer class="row">
  @include('includes.footer')
</footer>
