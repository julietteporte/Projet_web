<header class="row"> @include('includes.header') </header>

<div class="container">
	<div class="col-lg-12 col-md-12">
		<br />
		<h2 class="text-center">{{ $manifestation->Intitule }}</h2>
		<br />
	</div>
	<div class="col-lg-4 col-md-4 text-center">
		<img src="/pictures/logo.png" alt="image" height="300" width="300">
	</div>
	<div class="col-lg-8 col-md-8">
		<div class="col-lg-7 col-md-7">
			<p>{{ $manifestation->Description }}</p>
			<p class="text-right">
				<label>Date : </label> {{ $manifestation->DateManifestation }}
			</p>
		</div>
		<div class="col-lg-5 col-md-5">
			GOOGLE MAP
		</div>
	</div>
	@if (Auth::check())
	<div class="form-group col-lg-12 col-md-5">
		@if (isset($participeFlag)) <span style="color: green;">Je participe !</span>
		<a href="/event/{{$manifestation->ID }}/participation">
			<button class="btn btn-default" role="button">Annuler</button>
		</a> @else <span style="color: red;">Je ne participe pas</span> <a
			href="/event/{{$manifestation->ID }}/participation">
			<button class="btn btn-default" role="button">Participer</button>
		</a> @endif
	</div>
	<div class="col-lg-12 col-md-12">
		<form action="/event/sendPicture" method="post"
			enctype="multipart/form-data">
			{{ csrf_field() }} <input type="hidden" name="id_event"
				value="{{ $manifestation->ID }}">
			<div class="form-group">
				<label for="exampleInputFile">Ajouter une image</label> <input
					type="file" id="image" name="image">
				<p class="help-block">Insérer une image en commentaire.</p>
			</div>
			<button type="submit" class="btn btn-default">Envoyer</button>
		</form>
	</div>
	@endif
	<div class="col-lg-12 col-md-12">
		<h3 class="text-center">Espace photos souvenir et commentaires</h3>
		<br /> @foreach ($photos as $photo)
		<div class="row">
			<div class="col-md-4">
				<img src="/uploads/{{ $photo->Fichier }}" alt="image" height="150"
					width="150">
			</div>
			<div class="col-md-8">{{ $photo->Description }}</div>
		</div>
		@endforeach
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>