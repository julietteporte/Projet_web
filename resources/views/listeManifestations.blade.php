@foreach($events as $event)
    <div id=users">
        <p><strong>{{ $event->Intitule }} {{ $event->DateManifestation }}</strong> (ID : {{ $event->ID }})</p>
        {!!  Form::open(['action' => ['EventController@update', $event->ID], 'method' => 'POST']) !!}
        {{Form::label('EtatValidite', 'Etat de la manifestation :')}}
        {{Form::text('EtatValidite', $event->EtatValidite)}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Modifier',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

        {!!Form::open(['action'=> ['EventController@destroy', $event->ID], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
        {!!Form::close() !!}
        <br/>
    </div>
@endforeach