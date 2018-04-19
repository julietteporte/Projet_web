@foreach($events as $event)
	<div id=event">
		<p><strong>{{ $event->Intitule }} {{ $event->DateManifestation }}</strong> (ID : {{ $event->ID }})</p>
		{!!  Form::open(['action' => ['ManifestationController@update', $event->id], 'method' => 'POST']) !!}
		{{Form::label('EtatValidite', 'Etat de la manifestation :')}}
		{{Form::text('EtatValidite', $event->EtatValidite)}}
		{{Form::hidden('_method','PUT')}}
		{{Form::submit('Modifier',['class'=>'btn btn-primary'])}}
		{!! Form::close() !!}

		{!!Form::open(['action'=> ['ManifestationController@destroy', $event->id], 'method' => 'POST']) !!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
		{!!Form::close() !!}
		<br/>
	</div>
@endforeach