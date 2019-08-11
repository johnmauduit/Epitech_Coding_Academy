@extends('.layouts.app')

@section('content')
	<h1>Ajout d'une Stat</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => 'Admin\AdminStatController@store']) !!}
		{!! Form::label('match', 'Match') !!}
		{!! Form::select('match', $select_match) !!}
		<br>
		{!! Form::label('player', 'Player') !!}
		{!! Form::select('player', $select_player) !!}
		<br>
		{!! Form::label('stat1', 'Stat 1') !!}
		{!! Form::text('stat1', null, ['placeholder' => 'valeur de la stat 1']) !!}
		<br>
		{!! Form::label('stat2', 'Stat 2') !!}
		{!! Form::text('stat2', null, ['placeholder' => 'valeur de la stat 2']) !!}
		<br>
		{!! Form::label('stat3', 'Stat 3') !!}
		{!! Form::text('stat3', null, ['placeholder' => 'valeur de la stat 3']) !!}
		<br>
		{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminStatController@index') }}">Retour</a>
	{!! Form::close() !!}
@endsection