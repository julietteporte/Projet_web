<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
html {
    position: relative;
    min-height: 100%;
}
</style>
<html>

@include('includes.header')


<div class="container">

	@if(isset($_POST["keywords_product"]) && strlen($_POST["keywords_product"]) === 0)
	<h2>Aucun mot clé renseigné</h2>

	@else
	<h2>{{__ ('search.title')}} <?php echo $_POST["keywords_product"]; ?></h2>
	<label>{{__ ('search.numberFind1')}} {{__ ('search.numberFind2')}}</label>
	<ul>
		@foreach ($produit as $p)
		@if($_POST["keywords_product"] === $p)
		<li>{{ $p->Intitule }}</li>
		@endif
		@endforeach
	</ul>
	@endif
</div>

@include('includes.footer')

</html>
