<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="style.css" />
<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<footer>
  <hr>
  <div class="social-media" align='center' >
    <div class="panel-body" >
      <a href="https://www.facebook.com/bdecesibdx/"><i class="fa fa-facebook" class="text-muted"></i><b> Bde Cesi Bordeaux</b></a>
      <div class="form-group col-lg-8 col-md-8">
        <a href="https://twitter.com/BdeCesiBordeaux"><i class="fa fa-twitter" class="text-muted"></i><b> @BdeCesiBordeaux</b></a>
        <div class="form-group col-lg-8 col-md-8">
          <i class="fa fa-snapchat-ghost" class="text-muted"></i><b> cesibordeaux</b>
        </div>
      </div>
    </div>
    <div class="well well" align="center" style="background: url('../pictures/baniere.jpg');">
      <a href="/confidentiality" style='color:#FFFFFF'>{{__('footer.policy') }}</a>
      <div class="form-row col-lg-8 col-md-8">
        <a href="/legal_notice" style='color:#FFFFFF'>{{__('footer.notice') }}</a>
        <div class="form-group col-lg-7 col-md-7">
          <a href="/terms_conditions" style='color:#FFFFFF'>{{__('footer.CG') }}</a>
          <div class="form-group col-lg-7 col-md-7">
            <span class="glyphicon glyphicon-envelope" style='color:#FFFFFF'></span><a href="/contact_us" style='color:#FFFFFF'><b> {{__('footer.contactUs') }}</b></a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="col-lg-12">
      <div class="col-md-8" align="left" style='color:#6E6E6E;'>
        {{__('footer.generatedPage') }}
        <script type="text/javascript">
          d = new Date();
          document.write(d.toLocaleDateString()+' à '+d.toLocaleTimeString());
        </script>
      </div>
      <div class="col-md-4" align="right">
        © BDE CESI Bordeaux - {{__('footer.rights') }}
      </div>
    </div>
  </div>
</footer>
