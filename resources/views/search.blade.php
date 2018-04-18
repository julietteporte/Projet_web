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
