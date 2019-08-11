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
	{!! Form::select('user_id', $select_user) !!}

	<br>
	{!! Form::label('match_id', 'match id') !!}
	{!! Form::number('match_id', $match->id, ['readonly']) !!}
	<br>

	<h3>Choose a winner !</h3>
	{!! Form::label('name', $match->team1->name) !!}
	{!! Form::radio('bet_team_winner_id', $match->team1_id, true) !!}
	
	{!! Form::label('name', $match->team2->name) !!}
	{!! Form::radio('bet_team_winner_id', $match->team2_id) !!}

	<br>
	{!! Form::label('bet', 'Bet($$$)') !!}
	{!! Form::number('bet', null, ['placeholder' => 'Put the money, you are betting!']) !!}
	<br>
	{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection