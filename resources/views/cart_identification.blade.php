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
			<li class="active"><a>IDENTIFICATION</a></li>
			<li><a>PAIEMENT</a></li>
			<li><a>VALIDATION</a></li>
		</ul>
		<br /> <br /> <br />
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-6">
			<h2>Pas encore de compte ? Inscris-toi</h2>
			<span class="glyphicons glyphicons-arrow-right"></span>
			<div class="panel panel-default">
				<div class="panel-body">
					<ul>
						<li><i class="glyphicon glyphicon-chevron-right"></i> Propose
							des activit�s et vote pour tes pr�f�r�es</li>
						<li><i class="glyphicon glyphicon-chevron-right"></i> Inscris
							toi aux activit�s</li>
						<li><i class="glyphicon glyphicon-chevron-right"></i> Partage
							tes photos des �v�nements pass�s</li>
					</ul>
					<button class="btn btn-dark pull-right">S'inscrire</button>
				</div>
			</div>
			<div></div>
		</div>
		<div class="col-lg-6 col-md-6">
			<h2>Vous avez un compte ? Se connecter</h2>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Se connecter</h3>
				</div>
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group">
							<label for="validationServer03">Email</label> <input type="text"
								class="form-control is-invalid" id="validationServer03"
								placeholder="Email" required>
						</div>
						<div class="form-group">
							<label for="validationServer04">Mot de passe</label> <input
								type="password" class="form-control is-invalid"
								id="validationServer04" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<div class="text-right text-danger">
								<a href="#">Mot de passe oubli� ?</a>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<button type="button" class="btn btn-fb">
							<i class="fa fa-facebook pr-1"></i>Se connecter avec Facebook
						</button>
						<button class="btn btn-dark pull-right">Se connecter</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="row">
  @include('includes.footer')
</footer>
