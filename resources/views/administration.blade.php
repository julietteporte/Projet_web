<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row">
	@include('includes.header')
</header>

<div class="container">
	<br><br><br>
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#adminutilisateur">{{__ ('administration.user')}}</a></li>
		<li><a data-toggle="tab" href="#adminboite">{{__ ('administration.suggestionsBox')}}</a></li>
		<li><a data-toggle="tab" href="#adminproduit">{{__ ('administration.article')}}</a></li>
		<li><a data-toggle="tab" href="#adminmanifestion">{{__ ('administration.manifestation')}}</a></li>
	</ul>
	<div class="tab-content">
		<div id="adminutilisateur" class="tab-pane fade in active">
			<div class="text-center">
				<h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{__ ('administration.userSection')}}</h3>
			</div>
			<br>
			<div class="row col-lg-12">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#adminetudiant">{{__ ('administration.student')}}</a></li>
					<li><a data-toggle="tab" href="#adminmembre">{{__ ('administration.member')}}</a></li>
					<li><a data-toggle="tab" href="#adminsalarie">{{__ ('administration.employee')}}</a></li>
				</ul>
				<div class="tab-content text-center">
					<div id="adminetudiant" class="tab-pane fade in active">
                        <br>
                       <ul>
                        @foreach ($user as $usr)
                            @if($usr->ID_TypeCompte === 1)
                               <div>{{ $usr->nom }}   {{ $usr->prenom }}   {{ $usr->email }}</div>
                               @endif
                        @endforeach
                       </ul>
					</div>
					<div id="adminmembre" class="tab-pane fade">
                        <br>
                        <ul>
                            @foreach ($user as $usr)
                                @if($usr->ID_TypeCompte === 2)
                                    <div>{{ $usr->nom }}   {{ $usr->prenom }}   {{ $usr->email }}</div>
                                @endif
                            @endforeach
                        </ul>
					</div>
					<div id="adminsalarie" class="tab-pane fade">
                        <br>
                        <ul>
                            @foreach ($user as $usr)
                                @if($usr->ID_TypeCompte === 3)
                                    <div>{{ $usr->nom }}   {{ $usr->prenom }}   {{ $usr->email }}</div>
                                @endif
                            @endforeach
                        </ul>
					</div>
				</div>
			</div>
		</div>
		<div id="adminboite" class="tab-pane fade">
			<div class="text-center">
				<h3><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> {{__ ('administration.suggestionSection')}}</h3>
			</div>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab"
					href="#adminattenteidee">{{__ ('administration.waiting')}}</a></li>
					<li><a data-toggle="tab" href="#admindesactiveridee">{{__ ('administration.disable')}}</a></li>
					<li><a data-toggle="tab" href="#adminactiveridee">{{__ ('administration.activate')}}</a></li>
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
					<h3><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{__ ('administration.articleSection')}}</h3>
				</div>
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab"
						href="#admindesactiverproduit">{{__ ('administration.disable')}}</a></li>
						<li><a data-toggle="tab" href="#adminactiverproduit">{{__ ('administration.activate')}}</a></li>
						<li><a data-toggle="tab" href="#admincreerproduit">{{__ ('administration.create')}}</a></li>
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
									<h3 class="panel-title">{{__ ('administration.createArticle')}}</h3>
								</div>
								<div class="panel-body">
									<form method="POST">
										<div class="form-row col-lg-4 col-md-4">
											<div class="form-group">
												<label for="validationServer03">{{__ ('administration.entitled')}}</label> <input
												type="text" class="form-control is-invalid"
												id="validationServer03" required>
											</div>
											<div class="form-group">
												<label for="validationServer04">{{__ ('administration.caption')}}</label> <input
												type="text" class="form-control is-invalid"
												id="validationServer04" required>
											</div>
											<div class="form-group">
												<label for="validationServer04 "><span
													class="glyphicon glyphicon-euro"></span>{{__ ('administration.price')}}</label><input
													type=number onchange="setTwoNumberDecimal" min="0" max="99"
													step="0.05" value="0.00" class="form-control is-invalid"
													id="validationServer04" required>
												</div>
											</div>
											<div class="form-row col-lg-5 col-md-5">
												<label>{{__ ('administration.description')}}</label>
												<textarea class="form-control" rows="10" name="message"></textarea>
											</div>

											<div class="form-row col-lg-3 col-md-3">
												<div class="panel-body text-center">
													<button class="btn">{{__ ('administration.uploadImage')}}</button>
												</div>
												<div class="panel-body text-center">
													<button class="fa fa-share btn" role="button" type="submit">{{__ ('administration.createArticle')}}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="adminmanifestion" class="tab-pane fade text-center">
						<h3><span class="glyphicon glyphicon-file" aria-hidden="true"></span> {{__ ('administration.manifestationSection')}}</h3>
						<p>Some content in menu 2.</p>
					</div>
				</div>
			</div>
<br><br><br><br>
			<footer class="row">
				@include('includes.footer')
			</footer>
