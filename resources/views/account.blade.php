<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BDE Cesi Bordeaux - Mon compte</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <header class="row">
    @include('includes.header')
  </header>
  <div class="text-center">
    <h1><b>
      Mon compte <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </b></h1>
    <h3>
      Bienvenue
      <?= $name; ?>
    </h3>
  </div>

  <div class="container">
    <h2>Mes infos personnelles</h2>
    <form action="/action_page.php">
      <div class="col-lg-6 col-md-6">
        <div class="form-group">
          <label for="firstname"> Prénom*</label> <input type="text" class="form-control" id="fstname" placeholder="Entrez votre prénom" name="first name">
        </div>
        <div class="form-group">
          <label for="name">Nom*</label> <input type="text" class="form-control" id="nm" placeholder="Entrez votre nom" name="name">
        </div>
        <div class="form-group">
          <label for="pwd">Mot de passe*</label> <input type="password" class="form-control" id="pwd" placeholder="Entrez un nouveau mot de passe" name="pwd">
        </div>
        <div class="text-right">
          <button type="submit" class="btn btn-default">J'enregistre mes modifications</button>
          </div>
        </div>

        <p>
          <br><FONT size="1"><I>Conformément à la loi informatique et Liberté du 6 janvier
          1978 modifiée, vous disposez d'un droit d'accès, de rectifications
          et d'opposition relatif aux informations vous concernant en vous
          adressant à BDE CESI Bordeaux : 264 Boulevard Godard, 33300 – France
          ou par e-mail à communication@bdecesibordeaux.fr</I></FONT>
        </p>
        <div class="text-right text-danger">*Champ requis.</div>
      </form>
    </div><br><br>

    <footer class="row">
      @include('includes.footer')
    </footer>

  </body>
</html>
