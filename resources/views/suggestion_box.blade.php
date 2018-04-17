<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row"> @include('includes.header') </header>
<div class="container">
	<div class="row">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div>
					<br />
					<h2 class="text-center">
						{{__ ('suggestionBox.title')}}
						<button class="btn pull-right" role="button">
							<a href="/submit_idea">{{__ ('suggestionBox.suggest')}}</a>
						</button>
					</h2>
					<br /> <br />
				</div>
			</div>
		</div>
		@foreach ($manifestations as $manifestation)
		@if($manifestation->EtatValidite === 'En cours de traitement')
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-row text-center">
							<div class="form-group">
								<label>{{$manifestation->Intitule }}</label>
							</div>
							<div class="form-group">
								<img src="../pictures/logo.png" alt="image" height="150"
									width="150">
							</div>
							<div class="form-group col-lg-6 col-md-6">
								<label>Prix : {{ $manifestation->Prix }}</label>
							</div>
							<div class="form-group col-lg-6 col-md-6">
								<label>Date : {{ $manifestation->DateManifestion }}</label>
							</div>
							<div class="form-group col-lg-12 col-md-5">
								<label>Description</label>
								<p>{{ $manifestation->Description }}</p>
							</div>
							<div class="form-group col-lg-12 col-md-5">
								<button class="btn btn-success" role="button">
									<span class="glyphicon glyphicon-thumbs-up"></span>
								</button>
								<button class="btn btn-danger" role="button">
									<span class="glyphicon glyphicon-thumbs-down"
										aria-hidden="true"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif 
			@endforeach
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
