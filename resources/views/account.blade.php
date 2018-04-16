<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>BDE Cesi Bordeaux - {{__ ('account.myAccount')}}</title>

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<header class="row"> @include('includes.header') </header>
	<div class="text-center">
		<h1>
			<b> {{__ ('account.myAccount')}} <span
				class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</b>
		</h1>
		<h3>
      {{__ ('account.welcome')}}
      <?= $name; ?>
    </h3>
	</div>
	<div class="container">
		<h2>{{__ ('account.info')}}</h2>
		<form action="/action_page.php">
			<div class="col-lg-6 col-md-6">
				<div class="form-group">
					<label for="firstname">{{__ ('account.firstName')}}*</label> <input
						type="text" class="form-control" id="fstname"
						placeholder="{{__ ('account.enterFirstName')}}" name="first name">
				</div>
				<div class="form-group">
					<label for="name">{{__ ('account.lastName')}}*</label> <input
						type="text" class="form-control" id="nm"
						placeholder="{{__ ('account.enterLastName')}}" name="name">
				</div>
				<div class="form-group">
					<label for="pwd">{{__ ('account.password')}}*</label> <input
						type="password" class="form-control" id="pwd"
						placeholder="{{__ ('account.enterPassword')}}" name="pwd">
				</div>
				<div class="text-right">
					<button type="submit" class="btn btn-default">{{__
						('account.saveModifications')}}</button>
				</div>
			</div>
			<p>
				<br> <FONT size="1"><I>Conformément à la loi informatique et Liberté
						du 6 janvier 1978 modifiée, vous disposez d'un droit d'accès, de
						rectifications et d'opposition relatif aux informations vous
						concernant en vous adressant à BDE CESI Bordeaux : 264 Boulevard
						Godard, 33300 – France ou par e-mail à
						communication@bdecesibordeaux.fr</I></FONT>
			</p>
			<div class="text-right text-danger">*{{__ ('account.requiredField')}}</div>
		</form>
	</div>
	<br>
	<br>
	<footer class="row"> @include('includes.footer') </footer>
</body>
</html>
