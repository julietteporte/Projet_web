<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<header class="row">
		@include('includes.header')
	</header>

<div class="row">
	<h1 class="text-center">NOUS CONTACTER</h1>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-md-offset-1">
			<div class="panel-body">
				<form method="POST">
					<div class="col-lg-5 col-md-5 ">
						<div class="form-group">
							<label for="validationServer02">Nom</label> <input type="text"
								class="form-control is-valid" id="validationServer02"
								placeholder="Last name" required>
						</div>
						<div class="form-group">
							<label for="validationServer01">Prénom</label> <input type="text"
								class="form-control is-valid" id="validationServer01"
								placeholder="Name" required>
						</div>
						<div class="form-group">
							<label for="validationServer03">Email</label> <input type="text"
								class="form-control is-invalid" id="validationServer03"
								placeholder="Email" required>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 ">
						<div class="form-group">
							<label>Sujet</label><input type="topic" class="form-control"
								name="topic" placeholder="Sujet">
						</div>
						<div class="form-group">
							<label>Contenu</label>
							<textarea class="form-control" rows="15" name="message"></textarea>
						</div>
						<button class="fa fa-share btn btn-outline btn-info pull-right"
							role="button" type="submit">Envoyer</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<footer class="row">
  @include('includes.footer')
</footer>
