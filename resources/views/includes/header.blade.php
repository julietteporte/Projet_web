<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	header
	{
		background : url('pictures/baniere.jpg');
	}
</style>

<header>
	<div class="container-fluid">
		<div class="navbar-header">
			<a href='/'><img src="pictures/logo.png" width="200" height="200"></a>
		</div>
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-right" id="navbar_header">
				<li><a href="#" style='color: #FFFFFF;'><span class="glyphicon glyphicon-shopping-cart" title="Panier"></span></a></li>
				@guest
					<li><a href="{{ route('login') }}" style='color: #FFFFFF;'>Se connecter</a></li>
					<li><a href="{{ route('register') }}" style='color: #FFFFFF;'>S'inscrire</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style='color: #FFFFFF;'>
							<span class="glyphicon glyphicon-user"></span> {{ Auth::user()->prenom }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li><a href="/account">Mon compte</a></li>
							<li>
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
									Déconnexion
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endguest
			</ul>
			<br> <br> <br> <br> <br>
			<div class="container" align="center">
				<form class="navbar-form navbar-search" role="search" method="post">
					<div class="form-group">
						<div class="dropdown">
							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Rechercher" name="keywords">
							</div>
							<button type="submit" class="btn" style='color: #6E6E6E;'>
								<a href="/search"><span class="glyphicon glyphicon-search"></span></a>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
				<ul class="nav nav-pills nav-justified">
					<li><a href="/" class="text-muted"><h4>ACCUEIL</h4></a></li>
					<li><a href="/about_us" class="text-muted"><h4>QUI SOMMES NOUS</h4></a></li>
					<li><a href="/shop" class="text-muted"><h4>BOUTIQUE</h4></a></li>
					<li><a href="/suggestion_box" class="text-muted"><h4>BOITE A IDEES</h4></a></li>
					<li><a href="/event" class="text-muted"><h4>MANIFESTATION</h4></a></li>
					<li><a href="/partners" class="text-muted"><h4>PARTENAIRES</h4></a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>
