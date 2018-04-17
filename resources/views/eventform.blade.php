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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Création d'évènement</div>
                <br>
                <form class="form-horizontal" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Intitule" class="col-md-4 control-label">Intitulé</label>
                        <div class="col-md-6">
                            <input id="Intitule" type="text" class="form-control" name="Intitule" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            <input id="Description" type="text" class="form-control" name="Description" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DateManifestation" class="col-md-4 control-label">Date de la manifestation</label>
                        <div class="col-md-6">
                            <input id="DateManifestation" type="date" class="form-control" name="DateManifestation" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Lieu" class="col-md-4 control-label">Lieu</label>
                        <div class="col-md-6">
                            <input id="Lieu" type="text" class="form-control" name="Lieu" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Prix" class="col-md-4 control-label">Prix</label>
                        <div class="col-md-6">
                            <input id="Prix" type="number" min="0" class="form-control" name="Prix" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Frequence" class="col-md-4 control-label">Fréquence</label>
                        <div class="col-md-6">
                            <input id="Frequence" type="text" class="form-control" name="Frequence" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                            <input type="submit" class="btn btn-primary" id="btn_add_event" name="btn_event"
                                   value="Créer l'évènement"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="row">
    @include('includes.footer')
</footer>