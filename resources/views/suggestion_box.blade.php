<header class="row"> @include('includes.header') </header>
<div class="container">
	<div class="row">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div>
					<br />
					<h2 class="text-center">
						{{__ ('suggestionBox.title')}}
						@if (Auth::check())
						<button class="btn pull-right" role="button">
							<a href="/submit_idea">{{__ ('suggestionBox.suggest')}}</a>
						</button>
						@endif
					</h2>
					<br /> <br />
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($manifestations as $manifestation)
			@if($manifestation->EtatValidite === 'En cours de traitement')
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-row text-center">
							<div class="form-group">
								<label>{{$manifestation->Intitule }}</label>
							</div>
							<div class="form-group">
								<img src="/pictures/logo.png" alt="image" height="150"
									width="150">
							</div>
							<div class="form-group col-lg-6 col-md-6">
								<label>Prix : {{ $manifestation->Prix }}</label>
							</div>
							<div class="form-group col-lg-6 col-md-6">
								<label>Date : {{ $manifestation->DateManifestion }}</label>
							</div>
							<div class="fix-description form-group col-lg-12 col-md-5">
								<label>Description</label>
								<p>{{ $manifestation->Description }}</p>
							</div>
							
							<div class="form-group col-lg-12 col-md-5">
    							@if ((count($manifestation->votePour) - count($manifestation->voteContre)) > 0)
    								<p style="color:green;">{{ count($manifestation->votePour) - count($manifestation->voteContre) }}</p>
                                @elseif ((count($manifestation->votePour) - count($manifestation->voteContre)) < 0)
    								<p style="color:red;">{{ count($manifestation->votePour) - count($manifestation->voteContre) }}</p>
                                @else
    								<p>{{ count($manifestation->votePour) - count($manifestation->voteContre) }}</p>
                                @endif
							</div>
							<div class="form-group col-lg-12 col-md-5">
    							<a href="/suggestion_box/{{$manifestation->ID }}/pour">
    								<button class="btn btn-success" role="button">
    									<span class="glyphicon glyphicon-thumbs-up"></span>
    								</button>
								</a>
    							<a href="/suggestion_box/{{$manifestation->ID }}/contre">
								<button class="btn btn-danger" role="button">
									<span class="glyphicon glyphicon-thumbs-down"
										aria-hidden="true"></span>
								</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif 
			@endforeach
		</div>
	</div>
</div>
<footer class="row"> @include('includes.footer') </footer>
