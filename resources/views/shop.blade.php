<header class="row"> @include('includes.header') </header>
<div class="row" id="main">
	<br />
	<h2 class="text-center">{{__ ('shop.article')}}</h2>

	<div class="col-lg-9 col-md-9">

		@if(Auth::user() && Auth::user()->ID_TypeCompte == 2 )

		<!-- FORMULAIRE AJOUT PRODUIT POP UP -->
		<div class="text-right">
			<button type="button" class="btn btn-primary" data-toggle="modal"
				data-target="#addProd">Ajouter un produit</button>
			<div class="modal" id="addProd" tabindex="-1" role="dialog"
				aria-labelledby="addProdLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="addProdLabel" align="center">Ajoutez
								votre produit</h3>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
														<form method="post">
							<div class="panel-body">

									<div class="form-row col-lg-4 col-md-4">
										<div class="form-group">
											<label for="Intitule">{{__ ('administration.entitled')}}</label>
											<input type="text" class="form-control is-invalid"
												id="Intitule" name="Intitule" required>
										</div>
										<div class="form-group">
											<label for="Legende">{{__ ('administration.caption')}}</label>
											<input type="text" class="form-control is-invalid"
												id="Legende" name="Legende" required>
										</div>
										<div class="form-group">
											<label for="Prix"><span class="glyphicon glyphicon-euro"></span>{{__
												('administration.price')}}</label><input type=number
												onchange="setTwoNumberDecimal" min="0" max="99" step="0.05"
												value="0.00" class="form-control is-invalid" id="Prix"
												name="Prix" required>
										</div>
									</div>
									<div class="form-row col-lg-5 col-md-5">
										<label for="Description">{{__ ('administration.description')}}</label>
										<textarea id="Description" type="text" class="form-control"
											name="Description" rows="10"></textarea>
									</div>
									<div class="form-row col-lg-4 col-md-4">
										<div class="panel-body text-center">
											<label for="Fichier">{{__ ('administration.uploadImage')}}</label>
											<input type="file" id="Fichier" name="Fichier">
										</div>
									</div>
							
							</div>

            					<div class="modal-footer">
            						<button type="button" class="btn btn-secondary"
            							data-dismiss="modal">Close</button>
            						<input type="submit" role="button" class="btn btn-primary"
            							name="add_product">{{__('administration.createArticle')}}</input>
            
            					</div>
					</form>
											</div>
					</div>
				</div>
			</div>
		</div>
		<br>

		<!-- FORMULAIRE AJOUT CATEGORIE POP UP -->
		<div class="text-right">
			<button type="button" class="btn btn-primary" data-toggle="modal"
				data-target="#addCate">Ajoutez votre Catégorie</button>
			<div class="modal" id="addCate" tabindex="-1" role="dialog"
				aria-labelledby="addCateLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="addCateLabel" align="center">Ajoutez
								votre Catégorie</h3>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="panel-body">
								<form method="POST">
									<div class="form-row col-lg-4 col-md-4">
										<div class="form-group">
											<label for="Intitule">{{__ ('administration.entitled')}}</label>
											<input type="text" class="form-control is-invalid"
												id="Intitule" name="Intitule" required>
										</div>
									</div>
							
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary"
							data-dismiss="modal">Close</button>
						<input type="submit" name="add_categorie" role="button"
							class="btn btn-primary">Ajouter</input>
					</div>
					</form>
				</div>
			</div>
		</div>

		@endif <br /> @foreach ($produit as $p)
		<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group col-lg-9 col-md-6 col-sm-6">
							<img src="/uploads/{{ $p->Fichier }}" alt="image" height="200"
								width="320">
						</div>
						<div class="form-group col-lg-3 col-md-6 col-sm-6">
							<a href="/shop/{{ $p->ID }}"><br /> <br /> <b><h4>{{ $p->Intitule
										}}</h4></b></a> <label class="text-danger"><h4>{{ $p->Prix }}
									€ TTC</h4></label> <br>@if(Auth::user() &&
							Auth::user()->ID_TypeCompte === 2 )
							<div class="text-right">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</div>
							@endif
						</div>
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<p>{{ $p->Legende }}</p>
						</div>
						<br> <br>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="col-lg-3 col-md-3">
		<div>
			<h3>{{__ ('shop.mostCommanded')}}</h3>
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
