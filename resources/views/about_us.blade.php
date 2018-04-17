<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="/css/style.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row"> @include('includes.header') </header>
<div class="container">
	<h2 class="text-center">{{__ ('aboutUs.title')}}</h2>
	<div class="col-lg-6 col-md-6">
		<br /> <img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
			alt="image" height="250" width="500">
	</div>
	<div class="col-lg-6 col-md-6">
		<h2 class="text-center">{{__ ('aboutUs.utility')}}</h2>
		<br />
		<p>{{__ ('aboutUs.text1')}}</p>
		<p>{{__ ('aboutUs.text2')}}</p>
		<p>{{__ ('aboutUs.text3')}}</p>
	</div>
	<div class="col-lg-12 col-md-12">
		<h2 class="text-center">{{__ ('aboutUs.team')}}</h2>
		<div class="col-lg-4 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group text-center">
							<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
								alt="image" height="150" width="150">
						</div>
						<div class="form-group col-lg-12 col-md-5">
							<label>NOM | ROLE</label>
							<p>Explication rôle ...</p>
							<p>Email : blabla@viacesi.fr</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group text-center">
							<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
								alt="image" height="150" width="150">
						</div>
						<div class="form-group col-lg-12 col-md-5">
							<label>NOM | ROLE</label>
							<p>Explication rôle ...</p>
							<p>Email : blabla@viacesi.fr</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group text-center">
							<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
								alt="image" height="150" width="150">
						</div>
						<div class="form-group col-lg-12 col-md-5">
							<label>NOM | ROLE</label>
							<p>Explication rôle ...</p>
							<p>Email : blabla@viacesi.fr</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
