<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row">
    @include('includes.header')
</header>
<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pas encore de compte ? Inscris-toi</div>
                <div class="panel-body">
                    <ul>
                        <li><i class="glyphicon glyphicon-chevron-right"></i> Propose
                            des activités et vote pour tes préférées</li>
                        <li><i class="glyphicon glyphicon-chevron-right"></i> Inscris
                            toi aux activités</li>
                        <li><i class="glyphicon glyphicon-chevron-right"></i> Partage
                            tes photos des événements passés</li>
                    </ul>
                    <a href="/register"><button class="btn btn-primary pull-right">S'inscrire</button></a>
                </div>
            </div>
            <div></div>
        </div>

        <div class="col-lg-5 col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Vous avez un compte ? SE CONNECTER</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse E-Mail</label>

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
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

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
                                        Mot de passe oublié
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                                <button type="button" class="btn btn-fb">
                                    <i class="fa fa-facebook pr-1"></i> Se connecter avec Facebook
                                </button>
                                <button type="submit" class="btn btn-primary pull-right">
                                    Se connecter
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