<header class="row"> @include('includes.header') </header>
<div class="container" id="main">
	@if(isset($_POST["keywords_product"]) &&
	strlen($_POST["keywords_product"]) === 0)
	<h2>Aucun mot clé renseigné</h2>
	@else
	<h2>{{__ ('search.title')}} <?php echo $_POST["keywords_product"]; ?></h2>
	<label>{{__ ('search.numberFind1')}} {{__ ('search.numberFind2')}}</label>
	<ul>
		@foreach ($produit as $p) @if($_POST["keywords_product"] === $p)
		<li>{{ $p->Intitule }}</li> @endif @endforeach
	</ul>
	@endif
</div>
<footer class="row"> @include('includes.footer') </footer>