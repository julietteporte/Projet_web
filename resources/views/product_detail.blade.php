<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<header class="row">
	    @include('includes.header')
	  </header>


<div class="row">
	<br /> <br /> <br />
	<div class="col-lg-9 col-md-9">
		<div class="form-row">
			<div class="form-group col-lg-4 col-md-4">
				<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
					alt="image" height="300" width="300">
			</div>
			<div class="form-group col-lg-8 col-md-8">
				<h3>NOM DU PRODUIT</h3>
				<br />
				<div class="col-lg-6 col-md-6">
					<label>Etat : </label>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="col-lg-4 col-md-4">
						<label for="validationServer03">Quantit� : </label>
					</div>
					<div class="col-lg-6 col-md-6">
						<input type="number" min="1" class="form-control is-invalid"
							id="validationServer01" placeholder="Quantity" required>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="text-center">
						<br /> <label class="text-danger">Prix � TTC</label>
					</div>
					<br />
					<p>Description produit</p>
					<br />
				</div>
				<div class="text-center">
					<button class="btn" role="button">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
						AJOUTER AU PANIER
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3">
		<div>
			<p>LES PLUS COMMANDES</p>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group col-lg-3 col-md-3">
					<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
						alt="image" height="60" width="60">
				</div>
				<div class="form-group col-lg-6 col-md-6">
					<label>Nom</label> <br /> <br /> <label class="text-danger">Prix
						� TTC</label> <label>L�gende produit</label>
					<p>Br�ve description produit</p>
				</div>
				<div class="form-group col-lg-3 col-md-3">
					<button class="btn" role="button">
						+ <span class="glyphicon glyphicon-shopping-cart"
							aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group col-lg-3 col-md-3">
					<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
						alt="image" height="60" width="60">
				</div>
				<div class="form-group col-lg-6 col-md-6">
					<label>Nom</label> <br /> <br /> <label class="text-danger">Prix
						� TTC</label> <label>L�gende produit</label>
					<p>Br�ve description produit</p>
				</div>
				<div class="form-group col-lg-3 col-md-3">
					<button class="btn" role="button">
						+ <span class="glyphicon glyphicon-shopping-cart"
							aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group col-lg-3 col-md-3">
					<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
						alt="image" height="60" width="60">
				</div>
				<div class="form-group col-lg-6 col-md-6">
					<label>Nom</label> <br /> <br /> <label class="text-danger">Prix
						� TTC</label> <label>L�gende produit</label>
					<p>Br�ve description produit</p>
				</div>
				<div class="form-group col-lg-3 col-md-3">
					<button class="btn" role="button">
						+ <span class="glyphicon glyphicon-shopping-cart"
							aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="row">
  @include('includes.footer')
</footer>
