<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row">
    @include('includes.header')
</header>


<div class="row">
	<div class="col-lg-10 col-md-10 col-md-offset-1">
		<h2 class="text-center">OU SOUMETS NOUS TON IDEE !</h2>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Poster une id�e</h3>
			</div>
			<div class="panel-body">
				<form method="POST">
					<div class="form-row col-lg-6 col-md-6">
						<div class="form-group">
							<label for="validationServer03">Intitul�</label> <input
								type="text" class="form-control is-invalid"
								id="validationServer03" required>
						</div>
						<div class="form-group">
							<label for="validationServer04">Lieu</label> <input type="text"
								class="form-control is-invalid" id="validationServer04" required>
						</div>
						<div class="form-group col-lg-7 col-md-7">
							<label for="validationServer04"><span
								class="glyphicon glyphicon-calendar"></span>Date</label> <input
								type="date" class="form-control is-invalid"
								id="validationServer04" required>
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label for="validationServer04 "><span
								class="glyphicon glyphicon-euro"></span>Prix �ventuel</label><input
								type=number onchange="setTwoNumberDecimal" min="0" max="99"
								step="0.05" value="0.00" class="form-control is-invalid"
								id="validationServer04" required>
						</div>
						<div class="form-group col-lg-12 col-md-5">
							<label>Description</label>
							<textarea class="form-control" rows="10" name="message"></textarea>
						</div>
					</div>
					<div class="form-row col-lg-6 col-md-6">
						<div class="form-group">
							<p>Tu peux effectuer une demande d'ajout d'id�e. Si tu as
								besoin d'aide du BDE pour faire la comm' autour de ton �v�nement
								(cr�ation de posterpost facebook,...) dis-le nous � la fin de la
								description de ton �v�nement !</p>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Fr�quence</label> <select
									class="form-control chosen-select">
									<!--  TODO : remplacer par les valeurs de la BDD -->
									<option value="Ponctuel">Ponctuel</option>
									<option value="Hebdomadaire">Hebdomadaire</option>
									<option value="Mensuel">Mensuel</option>
									<option value="Journalier">Journalier</option>
									<option value="R�current">R�current</option>
									<option value="Annuel">Annuel</option>
								</select>
							</div>
						</div>
						<div class="panel-body text-center">
							<button class="btn">T�l�charger une image</button>
						</div>
						<div class="panel-body text-center">
							<button class="fa fa-share btn" role="button" type="submit">Soumettre</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<footer class="row">
  @include('includes.footer')
</footer>
