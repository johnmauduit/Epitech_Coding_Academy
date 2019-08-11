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

	{!! Form::open(['action' => 'Admin\AdminPlayerController@store']) !!}
		{!! Form::label('name', 'name') !!}
		{!! Form::text('name', null, ['placeholder' => 'Nom du player']) !!}
		<br>
		{!! Form::label('name', 'team') !!}
		{!! Form::select('team_id', $select) !!}
		<br>
		{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">Retour</a>
	{!! Form::close() !!}
@endsection