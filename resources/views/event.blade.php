<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="/style.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row"> @include('includes.header') </header>

<div class="container">
	<div class="col-lg-12 col-md-12">
		<div>
			<br />
			<h2 class="text-center">{{__ ('event.title')}}</h2>
			<br />
		</div>
	</div>
	@foreach ($manifestations as $manifestation)
	<div class="col-lg-4 col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-row text-center">
					<img src="../pictures/logo.png" alt="image" height="150"
						width="150"> <br /> <a href="/event/{{ $manifestation->ID }}"><h4>{{
							$manifestation->Intitule }}</h4></a>
					<p>{{ $manifestation->Description }}</p>
					<label>{{ $manifestation->DateManifestion }}</label>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
<footer class="row"> @include('includes.footer') </footer>
