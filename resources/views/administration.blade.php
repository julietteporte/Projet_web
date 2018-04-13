<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<header class="row">
	    @include('includes.header')
	  </header>


<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#adminutilisateur">Utilisateurs</a></li>
		<li><a data-toggle="tab" href="#adminboite">Bo�te � id�es</a></li>
		<li><a data-toggle="tab" href="#adminproduit">Produits</a></li>
		<li><a data-toggle="tab" href="#adminmanifestion">Manifestations</a></li>
	</ul>
	<div class="tab-content">
		<div id="adminutilisateur" class="tab-pane fade in active">
			<div class="text-center">
				<h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Page administration pour la gestion des comptes</h3>
			</div>
			<div class="row col-lg-6 text-center">
				<h4>EN ATTENTE</h4>
				<p>Liste !!!</p>
			</div>
			<div class="row col-lg-6">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#adminetudiant">Etudiants</a></li>
					<li><a data-toggle="tab" href="#adminmembre">Membres BDE</a></li>
					<li><a data-toggle="tab" href="#adminsalarie">Salari�s BDE</a></li>
				</ul>
				<div class="tab-content text-center">
					<div id="adminetudiant" class="tab-pane fade in active">
						<p>Liste Etudiants</p>
					</div>
					<div id="adminmembre" class="tab-pane fade">
						<p>Liste Membres</p>
					</div>
					<div id="adminsalarie" class="tab-pane fade">
						<p>Liste Salari�s</p>
					</div>
				</div>
			</div>
		</div>
		<div id="adminboite" class="tab-pane fade">
			<div class="text-center">
				<h3><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Page administration pour la gestion des id�es</h3>
			</div>


			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab"
					href="#adminattenteidee">EN ATTENTE</a></li>
				<li><a data-toggle="tab" href="#admindesactiveridee">DESACTIVER</a></li>
				<li><a data-toggle="tab" href="#adminactiveridee">ACTIVER</a></li>
			</ul>
			<div class="tab-content text-center">
				<div id="adminattenteidee" class="tab-pane fade in active">
					<p>Liste en attente</p>
				</div>
				<div id="admindesactiveridee" class="tab-pane fade">
					<p>Liste desactiver</p>
				</div>
				<div id="adminactiveridee" class="tab-pane fade">
					<p>Liste activer</p>
				</div>
			</div>
		</div>
		<div id="adminproduit" class="tab-pane fade">
			<div class="text-center">
				<h3><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Page administration pour la gestion des produits</h3>
			</div>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab"
					href="#admindesactiverproduit">DESACTIVER</a></li>
				<li><a data-toggle="tab" href="#adminactiverproduit">ACTIVER</a></li>
				<li><a data-toggle="tab" href="#admincreerproduit">CREER</a></li>
			</ul>
			<div class="tab-content text-center">
				<div id="admindesactiverproduit" class="tab-pane fade in active">
					<p>Liste desactiver</p>
				</div>
				<div id="adminactiverproduit" class="tab-pane fade">
					<p>Liste activer</p>
				</div>
				<div id="admincreerproduit" class="tab-pane fade">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Poster une id�e</h3>
						</div>
						<div class="panel-body">
							<form method="POST">
								<div class="form-row col-lg-4 col-md-4">
									<div class="form-group">
										<label for="validationServer03">Intitul�</label> <input
											type="text" class="form-control is-invalid"
											id="validationServer03" required>
									</div>
									<div class="form-group">
										<label for="validationServer04">L�gende</label> <input
											type="text" class="form-control is-invalid"
											id="validationServer04" required>
									</div>
									<div class="form-group">
										<label for="validationServer04 "><span
											class="glyphicon glyphicon-euro"></span>Prix</label><input
											type=number onchange="setTwoNumberDecimal" min="0" max="99"
											step="0.05" value="0.00" class="form-control is-invalid"
											id="validationServer04" required>
									</div>
								</div>
								<div class="form-row col-lg-5 col-md-5">
									<label>Description</label>
									<textarea class="form-control" rows="10" name="message"></textarea>
								</div>

								<div class="form-row col-lg-3 col-md-3">
									<div class="panel-body text-center">
										<button class="btn">T�l�charger une image</button>
									</div>
									<div class="panel-body text-center">
										<button class="fa fa-share btn" role="button" type="submit">Cr�er
											le produit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="adminmanifestion" class="tab-pane fade text-center">
			<h3><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Page administration pour la gestion des comptes</h3>
			<p>Some content in menu 2.</p>
		</div>
	</div>
</div>

<footer class="row">
  @include('includes.footer')
</footer>
