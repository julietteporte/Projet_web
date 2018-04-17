<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header class="row">
  @include('includes.header')
</header>
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div>
      <br />
      <h2 class="text-center">{{__ ('shop.article')}}</h2>
      <br />
    </div>
  </div>

  <div class="col-lg-9 col-md-9">
    @foreach ($produit as $p)
    <div class="col-lg-4 col-md-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-row">
            <div class="form-group col-lg-8 col-md-8 text-center">
              <img src="/uploads/{{ $p->Fichier }}" alt="image" height="200" width="300">
            </div>
            <ul>
              <div class="form-group col-lg-4 col-md-4">
                <a href="/shop/{{ $p->ID }}"><h4><b>{{ $p->Intitule }}</b></h4></a>
                <br/><b>{{ $p->Prix }}</b>
              </div>
              <div class="form-group col-lg-12 col-md-5">
                <p>{{ $p->Legende }}</p>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="col-lg-3 col-md-3">
    <div>
      <h3>{{__ ('shop.mostCommanded')}}</h3>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="form-group col-lg-3 col-md-3">
          <img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
          alt="image" height="60" width="60">
        </div>
        <div class="form-group col-lg-6 col-md-6">
          <label>Nom</label> <br /> <br /> <label class="text-danger">Prix
            € TTC</label> <label>Légende produit</label>
            <p>Brève description produit</p>
          </div>
          <div class="form-group col-lg-3 col-md-3">
            <button class="btn" role="button">
              + <span class="glyphicon glyphicon-shopping-cart"
              aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-group col-lg-3 col-md-3">
            <img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
            alt="image" height="60" width="60">
          </div>
          <div class="form-group col-lg-6 col-md-6">
            <label>Nom</label> <br /> <br /> <label class="text-danger">Prix
              € TTC</label> <label>Légende produit</label>
              <p>Brève description produit</p>
            </div>
            <div class="form-group col-lg-3 col-md-3">
              <button class="btn" role="button">
                + <span class="glyphicon glyphicon-shopping-cart"
                aria-hidden="true"></span>
              </button>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="form-group col-lg-3 col-md-3">
              <img src="file:///D:/workspace_php/siteBDE/image/image.jpg"
              alt="image" height="60" width="60">
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <label>Nom</label> <br /> <br /> <label class="text-danger">Prix
                € TTC</label> <label>Légende produit</label>
                <p>Brève description produit</p>
              </div>
              <div class="form-group col-lg-3 col-md-3">
                <button class="btn" role="button">
                  + <span class="glyphicon glyphicon-shopping-cart"
                  aria-hidden="true"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="row">
        @include('includes.footer')
      </footer>
