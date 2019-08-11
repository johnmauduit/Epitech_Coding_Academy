@extends('.layouts.app')

@section('content')
	<h1>Modification d'une Stat</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => ['Admin\AdminStatController@store', 'id' => $stat->id]]) !!}
		{!! Form::label('match', 'Match') !!}
		{!! Form::select('match', $select_match, $stat->match_id) !!}
		<br>
		{!! Form::label('player', 'Player') !!}
		{!! Form::select('player', $select_player, $stat->player_id) !!}
		<br>
		{!! Form::label('stat1', 'Stat 1') !!}
		{!! Form::text('stat1', $stat->stat1, ['placeholder' => 'valeur de la stat 1']) !!}
		<br>
		{!! Form::label('stat2', 'Stat 2') !!}
		{!! Form::text('stat2', $stat->stat2, ['placeholder' => 'valeur de la stat 2']) !!}
		<br>
		{!! Form::label('stat3', 'Stat 3') !!}
		{!! Form::text('stat3', $stat->stat3, ['placeholder' => 'valeur de la stat 3']) !!}
		<br>
		{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminStatController@index') }}">Retour</a>
	{!! Form::close() !!}
@endsection