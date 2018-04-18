<header class="row"> @include('includes.header') </header>
<div class="row" id="main">
	<br/> <br/> <br/> <br/>
	<div class="col-lg-9 col-md-9">
		<div class="form-row">
			<div class="form-group col-lg-4 col-md-4 col-lg-offset-1">
				<img src="/uploads/{{ $produit->Fichier }}" alt="image" height="350" width="540">
			</div>
			<div class="form-group col-lg-7 col-md-7">
				<b><h2>{{ $produit->Intitule }}</h2></b>
				<br />
				<div class="col-lg-6 col-md-6">
					<label>Etat : {{ $produit->Disponibilite }}</label>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="col-lg-4 col-md-4">
						<label for="validationServer03">Quantité : </label>
					</div>
					<div class="col-lg-6 col-md-6">
						<input type="number" min="1" class="form-control is-invalid"
							id="validationServer01" placeholder="Quantity" required>
					</div>
				</div>
				<div class="col-lg-10 col-md-10">
					<div class="text-center">
						<br/> <label class="text-danger"><h3>{{ $produit->Prix }} € TTC</h3></label>
					</div>
					<br/><br/>
					<p>{{ $produit->Description }}</p>
					<br/><br/><br/>
				</div>
				<div class="text-center">

					<button class="btn" role="button">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
						{{__ ('shop.addCart')}}
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3">
		<div>
			<p>{{__ ('shop.mostCommanded')}}</p>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group col-lg-3 col-md-3">
					<img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
						alt="image" height="60" width="60">
				</div>
				<div class="form-group col-lg-6 col-md-6">
					<label>Nom</label> <br /> <br /> <label class="text-danger">Prix €
						TTC</label> <label>Légende produit</label>
					<p>Brève description produit</p>
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
					<label>Nom</label> <br /> <br /> <label class="text-danger">Prix €
						TTC</label> <label>Légende produit</label>
					<p>Brève description produit</p>
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
					<label>Nom</label> <br /> <br /> <label class="text-danger">Prix €
						TTC</label> <label>Légende produit</label>
					<p>Brève description produit</p>
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
<footer class="row"> @include('includes.footer') </footer>
