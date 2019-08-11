@extends('.layouts.app')

@section('content')
	<h1>Modification d'un Player</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::model($player, ['action' => ['Admin\AdminPlayerController@store', 'id' => $player->id]]) !!}
		{!! Form::label('name', 'name') !!}
		{!! Form::text('name') !!}
		<br>
		{!! Form::label('name', 'team') !!}
		{!! Form::select('team_id', $select, $player->team->id) !!}
		<br>
		{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">Retour</a>
	{!! Form::close() !!}
@endsection