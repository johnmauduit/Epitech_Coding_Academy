@extends('.layouts.app')

@section('content')
	<h1>Ajout d'un Match</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => 'Admin\AdminMatchController@store']) !!}
		{!! Form::label('team1', 'Equipe1') !!}
		{!! Form::select('team1', $select) !!}
		<br>
		{!! Form::label('team2', 'Equipe2') !!}
		{!! Form::select('team2', $select) !!}
		<br>
		{!! Form::label('open', 'Open') !!}
		{!! Form::checkbox('open', 1) !!}
		<br>
		{!! Form::label('winner', 'Vainqueur') !!}
		{!! Form::select('winner', $select_winner) !!}
		<br>
		{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminMatchController@index') }}">Retour</a>
	{!! Form::close() !!}
@endsection