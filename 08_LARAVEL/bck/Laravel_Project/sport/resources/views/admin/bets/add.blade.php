@extends('layouts.app')

@section('content')

<div class="container">
<h1>Bets</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<h3> Admin -  Add a bet </h3>

	{!! Form::open(['action' => 'Admin\AdminBetController@store']) !!}
			
	{!! Form::label('user_id', 'user id') !!}
	{!! Form::number('user_id', null) !!}

	<br>
	{!! Form::label('match_id', 'match id') !!}
	{!! Form::select('match_id', $select) !!}
	<br>

	<h3>Choose a winner !</h3>
	{!! Form::label('name', 'team1') !!}
	{!! Form::radio('bet_team_winner_id') !!}
	
	{!! Form::label('name', 'team2') !!}
	{!! Form::radio('bet_team_winner_id') !!}
	<br>
	{!! Form::label('bet', 'Bet($$$)') !!}
	{!! Form::number('bet', null, ['placeholder' => 'Put the money, you are betting!']) !!}
	<br>
	{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection