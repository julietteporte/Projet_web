<header class="row"> @include('includes.header') </header>
<div class="row" id="main">
	<div class="col-lg-10 col-md-10 col-md-offset-1">
		<h2 class="text-center">{{__ ('suggestionBox.submitIdea')}}</h2>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{__ ('suggestionBox.postSuggestion')}}</h3>
			</div>
			<div class="panel-body">
				<form method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-row col-lg-6 col-md-6">
						<div class="form-group">
							<label for="Intitule">{{__ ('suggestionBox.entitled')}}</label>
							<input type="text" name="Intitule" class="form-control is-invalid"
								id="Intitule" required>
						</div>
						<div class="form-group">
							<label for="Lieu">{{__ ('suggestionBox.place')}}</label>
							<input type="text" name="Lieu" class="form-control is-invalid"
								id="Lieu" required>
						</div>
						<div class="form-group col-lg-7 col-md-7">
							<label for="DateManifestation"><span
								class="glyphicon glyphicon-calendar"></span>{{__
								('suggestionBox.date')}}</label> <input type="date"
								class="form-control is-invalid" name="DateManifestation" id="DateManifestation" required>
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label for="Prix ">{{__('suggestionBox.price')}}</label>
							<input type=number onchange="setTwoNumberDecimal" min="0" max="99" step="0.05"
								value="0.00" name="Prix" class="form-control is-invalid"
								id="Prix" required>
						</div>
						<div class="form-group col-lg-12 col-md-5">
							<label>{{__ ('suggestionBox.description')}}</label>
							<textarea class="form-control" name="Description" rows="10" name="message"></textarea>
						</div>
					</div>
					<div class="form-row col-lg-6 col-md-6">
						<div class="form-group">
							<p>{{__ ('suggestionBox.text')}}</p>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="Frequence" class="col-md-4 control-label">{{__ ('administration.frequency')}}</label>
								<div class="col-md-6">
									<input id="Frequence" type="text" class="form-control"
										name="Frequence" required autofocus>
								</div>
							</div>
						</div>
						<div class="panel-body text-center">
							<input type="file" id="image" name="image">
							{{__ ('suggestionBox.uploadImage')}}
						</div>
						<div class="panel-body text-center">
							<input class="btn btn-primary" role="button"
								name="btn_suggestion" type="submit" value="{{__
								('suggestionBox.submit')}}">
						</div>
					</div>
				</form>
			</div>
<!-- 			<ul> -->
<!-- 				@foreach ($produit as $p) -->
<!-- 				<li>{{ $p->Intitule }}</li> @endforeach -->
<!-- 			</ul> -->
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
