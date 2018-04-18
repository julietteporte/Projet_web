@foreach($users as $user)
	<div id=users">
		<p><strong>{{ $user->nom }} {{ $user->prenom }}</strong> (ID : {{ $user->id }})</p>
		{!!  Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST']) !!}
		{{Form::label('ID_TypeCompte', 'Rang de l\'utilisateur :')}}
		{{Form::text('ID_TypeCompte', $user->ID_TypeCompte)}}
		{{Form::hidden('_method','PUT')}}
		{{Form::submit('Modifier',['class'=>'btn btn-primary'])}}
		{!! Form::close() !!}

		{!!Form::open(['action'=> ['UserController@destroy', $user->id], 'method' => 'POST']) !!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
		{!!Form::close() !!}
		<br/>
	</div>
@endforeach