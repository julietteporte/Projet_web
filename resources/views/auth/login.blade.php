<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row">
    @include('includes.header')
</header>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__ ('auth.noAccount')}}</div>
                <div class="panel-body">
                    <ul>
                        <li><i class="glyphicon glyphicon-chevron-right"></i> {{__ ('auth.argument1')}}</li>
                        <li><i class="glyphicon glyphicon-chevron-right"></i> {{__ ('auth.argument2')}}</li>
                        <li><i class="glyphicon glyphicon-chevron-right"></i> {{__ ('auth.argument3')}}</li>
                    </ul>
                    <a href="/register"><button class="btn btn-primary pull-right">{{__ ('auth.register')}}</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">{{__ ('auth.haveAccount')}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{__ ('auth.email')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{__ ('auth.password')}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Rester connecté
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <div class="text-right text-danger">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{__ ('auth.passwordForgotten')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                                <button type="button" class="btn btn-fb">
                                    <i class="fa fa-facebook pr-1"></i> {{__ ('auth.loginFacebook')}}
                                </button>
                                <button type="submit" class="btn btn-primary pull-right">
                                    {{__ ('auth.login')}}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="row">
    @include('includes.footer')
</footer>