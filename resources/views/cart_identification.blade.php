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
		<br /> <br />
		<ul class="nav nav-pills nav-justified">
			<li><a>{{__ ('cart.cart')}}</a></li>
			<li class="active"><a>{{__ ('cart.identification')}}</a></li>
			<li><a>{{__ ('cart.payment')}}</a></li>
			<li><a>{{__ ('cart.validation')}}</a></li>
		</ul>
		<br /> <br /> <br />
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6">
			<h2>{{__ ('cart.noAccount')}}</h2>
			<span class="glyphicons glyphicons-arrow-right"></span>
			<div class="panel panel-default">
				<div class="panel-body">
					<ul>
						<li><i class="glyphicon glyphicon-chevron-right"></i> {{__
							('cart.argument1')}}</li>
						<li><i class="glyphicon glyphicon-chevron-right"></i> {{__
							('cart.argument2')}}</li>
						<li><i class="glyphicon glyphicon-chevron-right"></i> {{__
							('cart.argument3')}}</li>
					</ul>
					<button class="btn btn-dark pull-right">{{__ ('cart.register')}}</button>
				</div>
			</div>
			<div></div>
		</div>
		<div class="col-lg-6 col-md-6">
			<h2>{{__ ('cart.haveAccount')}}</h2>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">{{__ ('cart.login')}}</h3>
				</div>
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group">
							<label for="validationServer03">{{__ ('cart.email')}}</label> <input
								type="text" class="form-control is-invalid"
								id="validationServer03" placeholder="{{__ ('cart.email')}}"
								required>
						</div>
						<div class="form-group">
							<label for="validationServer04">{{__ ('cart.password')}}</label>
							<input type="password" class="form-control is-invalid"
								id="validationServer04" placeholder="{{__ ('cart.password')}}"
								required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<div class="text-right text-danger">
								<a href="#">{{__ ('cart.passwordForgotten')}}</a>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<button type="button" class="btn btn-fb">
							<i class="fa fa-facebook pr-1"></i>{{__ ('cart.loginFacebook')}}
						</button>
						<button class="btn btn-dark pull-right">{{__ ('cart.login')}}</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
