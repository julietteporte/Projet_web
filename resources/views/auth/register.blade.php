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
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{__ ('auth.register')}}</div>
				<form class="form-horizontal" method="POST"
					action="{{ route('register') }}">
					{{ csrf_field() }}
					<div
						class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
						<label for="nom" class="col-md-4 control-label">{{__
							('auth.lastName')}}</label>
						<div class="col-md-6">
							<input id="nom" type="text" class="form-control" name="nom"
								value="{{ old('nom') }}" required autofocus> @if
							($errors->has('nom')) <span class="help-block"> <strong>{{
									$errors->first('nom') }}</strong>
							</span> @endif
						</div>
					</div>
					<div
						class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
						<label for="prenom" class="col-md-4 control-label">{{__
							('auth.firstName')}}</label>
						<div class="col-md-6">
							<input id="prenom" type="text" class="form-control" name="prenom"
								value="{{ old('prenom') }}" required autofocus> @if
							($errors->has('prenom')) <span class="help-block"> <strong>{{
									$errors->first('prenom') }}</strong>
							</span> @endif
						</div>
					</div>
					<div
						class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">{{__
							('auth.email')}}</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email"
								value="{{ old('email') }}" required> @if ($errors->has('email'))
							<span class="help-block"> <strong>{{ $errors->first('email') }}</strong>
							</span> @endif
						</div>
					</div>
					<div
						class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-md-4 control-label">{{__
							('auth.password')}}</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control"
								name="password" required> @if ($errors->has('password')) <span
								class="help-block"> <strong>{{ $errors->first('password') }}</strong>
							</span> @endif
							<div>{{__ ('auth.minPassword')}}</div>
						</div>
					</div>
					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">{{__
							('auth.confirmPassword')}}</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control"
								name="password_confirmation" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<label class="col-md-7 control-label"> <input
								class="form-check-input is-invalid" type="checkbox" value=""
								id="check" required> {{__ ('auth.term')}}
							</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-5">
							<button type="submit" class="btn btn-primary">{{__
								('auth.register')}}</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
