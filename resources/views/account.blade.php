<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BDE Cesi Bordeaux - Mon compte</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</style>
</head>
<body>
  <h1>Mon compte</h1>
  <img src="pictures/settings-gears.png" alt="Config account">
  <h4>Bienvenue <?= $name; ?></h4>

  <div class="container">
    <h2>Mes infos personnelles</h2>
    <form action="/action_page.php">
      <div class="form-group">
        <label for="first name">Prénom *</label>
        <input type="text" class="form-control" id="fstname" placeholder="Entrer votre prénom" name="first name">
      </div>
      <div class="form-group">
        <label for="name">Nom *</label>
        <input type="text" class="form-control" id="nm" placeholder="Entrer votre nom" name="name">
      </div>
      <div class="form-group">
        <label for="pwd">Mot de passe *</label>
        <input type="password" class="form-control" id="pwd" placeholder="Entrer un nouveau mot de passe" name="pwd">
      </div>
      <button type="submit" class="btn btn-default">J'enregistre mes modifications</button>
      <p style="color:red;"><br/>*Champ requis</p>
      <p><br/>Conformément à la loi informatique et Liberté du 6 janvier 1978 modifiée, vous disposez d'un droit d'accès, de rectifications
        et d'opposition relatif aux informations vous concernant en vous adressant à BDE CESI Bordeaux : 264 Boulevard Godard, 33300 –
        France ou par  e-mail à communication@bdecesibordeaux.fr</p>
      </form>
    </div>
  </body>
  </html>
