<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row"> @include('includes.header') </header>
<div class="row">
	<div class="col-lg-10 col-md-10 col-md-offset-1">
		<h2 class="text-center">{{__ ('suggestionBox.submitIdea')}}</h2>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{__ ('suggestionBox.postSuggestion')}}</h3>
			</div>
			<div class="panel-body">
				<form method="POST">
					<div class="form-row col-lg-6 col-md-6">
						<div class="form-group">
							<label for="validationServer03">{{__ ('suggestionBox.entitled')}}</label>
							<input type="text" class="form-control is-invalid"
								id="validationServer03" required>
						</div>
						<div class="form-group">
							<label for="validationServer04">{{__ ('suggestionBox.place')}}</label>
							<input type="text" class="form-control is-invalid"
								id="validationServer04" required>
						</div>
						<div class="form-group col-lg-7 col-md-7">
							<label for="validationServer04"><span
								class="glyphicon glyphicon-calendar"></span>{{__
								('suggestionBox.date')}}</label> <input type="date"
								class="form-control is-invalid" id="validationServer04" required>
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label for="validationServer04 "><span
								class="glyphicon glyphicon-euro"></span>{{__
								('suggestionBox.price')}}</label><input type=number
								onchange="setTwoNumberDecimal" min="0" max="99" step="0.05"
								value="0.00" class="form-control is-invalid"
								id="validationServer04" required>
						</div>
						<div class="form-group col-lg-12 col-md-5">
							<label>{{__ ('suggestionBox.description')}}</label>
							<textarea class="form-control" rows="10" name="message"></textarea>
						</div>
					</div>
					<div class="form-row col-lg-6 col-md-6">
						<div class="form-group">
							<p>{{__ ('suggestionBox.text')}}</p>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Fréquence</label> <select
									class="form-control chosen-select">
									<!--  TODO : remplacer par les valeurs de la BDD -->
									<option value="Ponctuel">Ponctuel</option>
									<option value="Hebdomadaire">Hebdomadaire</option>
									<option value="Mensuel">Mensuel</option>
									<option value="Journalier">Journalier</option>
									<option value="Recurrent">Récurrent</option>
									<option value="Annuel">Annuel</option>
								</select>
							</div>
						</div>
						<div class="panel-body text-center">
							<button class="btn">{{__ ('suggestionBox.uploadImage')}}</button>
						</div>
						<div class="panel-body text-center">
							<button class="fa fa-share btn" role="button" type="submit">{{__
								('suggestionBox.submit')}}</button>
						</div>
					</div>
				</form>
			</div>
			<ul>
				@foreach ($produit as $p)
				<li>{{ $p->Intitule }}</li> @endforeach
			</ul>
			@endif
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>


