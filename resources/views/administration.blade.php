<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row">
	@include('includes.header')
</header>
<body>
<div class="container">
	<br><br><br>
	@if(Auth::user()->ID_TypeCompte != 2)
		<h1 class="text-center">{{__ ('administration.joke')}}</h1>
		<div class="text-center">
			<img src="../pictures/Gandalf.png"/>
		</div>
	@else
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#adminutilisateur">{{__ ('administration.user')}}</a></li>
			<li><a data-toggle="tab" href="#adminboite">{{__ ('administration.suggestionsBox')}}</a></li>
			<li><a data-toggle="tab" href="#adminmanifestion">{{__ ('administration.manifestation')}}</a></li>
		</ul>
		<div class="tab-content">
			<div id="adminutilisateur" class="tab-pane fade in active">
				<br><br>
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
				<br><br>
				<div class="text-center">
					<h3><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> {{__ ('administration.suggestionSection')}}</h3>
				</div>
				<br><br>
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#adminattenteidee">{{__ ('administration.waiting')}}</a></li>
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
			<div id="adminmanifestion" class="tab-pane fade text-center">
				<h3><span class="glyphicon glyphicon-file" aria-hidden="true"></span> {{__ ('administration.manifestationSection')}}</h3>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">{{__ ('administration.createEvent')}}</h3>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-row col-lg-4 col-md-4">
								<div class="form-group">
									<label for="Intitule">{{__ ('administration.entitled')}}</label>
									<input type="text" class="form-control" id="Intitule" name="Intitule" required>
								</div>
								<div class="form-group">
									<label for="Prix">{{__ ('administration.price')}}</label>
									<input type=number onchange="setTwoNumberDecimal" min="0" max="99" step="0.05"
										   value="0.00" class="form-control" id="Prix" name="Prix" required>
								</div>
								<div class="form-group">
									<label for="Lieu">{{__ ('administration.place')}}</label>
									<input type="text" class="form-control" id="Lieu" name ="Lieu" required>
								</div>
								<div class="form-group">
									<label for="DateManifestation">{{__ ('administration.date')}}</label>
									<input id="DateManifestation" type="date" class="form-control" name="DateManifestation" required >
								</div>
								<div class="form-group">
									<label for="Frequence">{{__ ('administration.frequency')}}</label>
									<input id="Frequence" type="text" class="form-control" name="Frequence" required >
								</div>
							</div>
							<div class="form-row col-lg-5 col-md-5">
								<label for="Description">{{__ ('administration.description')}}</label>
								<textarea id="Description" type="text" class="form-control" name="Description" style="resize: none; height: 330px;" required></textarea>
							</div>
							<div class="form-row col-lg-3 col-md-3">
								<div class="panel-body text-center">
									<button class="btn">{{__ ('administration.uploadImage')}}</button>
								</div>
								<br>
								<div class="panel-body text-center">
									<input class="btn btn-primary"  type="submit" value="{{__ ('administration.createEvent')}}" name="btn_event"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
			<br><br>
</div>
	@endif
<br><br><br><br>
</body>
<footer class="row">
	@include('includes.footer')
</footer>
