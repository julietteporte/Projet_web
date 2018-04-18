<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row"> @include('includes.header') </header>
<div class="row">
	<h1 class="text-center">{{__ ('contactUs.title')}}</h1>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-md-offset-1">
			<div class="panel-body">
				<form method="POST">
					<div class="col-lg-5 col-md-5 ">
						<div class="form-group">
							<label for="validationServer02">{{__ ('contactUs.lastName')}}</label>
							<input type="text" class="form-control is-valid"
								id="validationServer02"
								placeholder="{{__ ('contactUs.lastName')}}" required>
						</div>
						<div class="form-group">
							<label for="validationServer01">{{__ ('contactUs.firstName')}}</label>
							<input type="text" class="form-control is-valid"
								id="validationServer01"
								placeholder="{{__ ('contactUs.firstName')}}" required>
						</div>
						<div class="form-group">
							<label for="validationServer03">{{__ ('contactUs.email')}}</label>
							<input type="text" class="form-control is-invalid"
								id="validationServer03" placeholder="{{__ ('contactUs.email')}}"
								required>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 ">
						<div class="form-group">
							<label>{{__ ('contactUs.subject')}}</label><input type="topic" class="form-control" name="topic" placeholder="{{__ ('contactUs.subject')}}">
						</div>
						<div class="form-group">
							<label>{{__ ('contactUs.content')}}</label>
							<textarea class="form-control" rows="15" name="message"></textarea>
						</div>
						<button class="btn btn-primary" role="button" type="submit">{{__ ('contactUs.submit')}}</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
