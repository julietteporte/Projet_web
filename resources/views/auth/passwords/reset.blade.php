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
				<div class="panel-heading">{{__ ('auth.resetPassword')}}</div>
				<div class="panel-body">
					<form class="form-horizontal" method="POST"
						action="{{ route('password.request') }}">
						{{ csrf_field() }} <input type="hidden" name="token"
							value="{{ $token }}">
						<div
							class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">{{__
								('auth.email')}}</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email"
									value="{{ $email or old('email') }}" required autofocus> @if
								($errors->has('email')) <span class="help-block"> <strong>{{
										$errors->first('email') }}</strong>
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
							</div>
						</div>
						<div
							class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label for="password-confirm" class="col-md-4 control-label">{{__
								('auth.confirmPassword')}}</label>
							<div class="col-md-6">
								<input id="password-confirm" type="password"
									class="form-control" name="password_confirmation" required> @if
								($errors->has('password_confirmation')) <span class="help-block">
									<strong>{{ $errors->first('password_confirmation') }}</strong>
								</span> @endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">{{__
									('auth.resetPassword')}}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
