@extends('layouts.app')

@section('content')

<div class="container">
<h1>Bets</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<h3> Admin - Edit a bet </h3>
	{!! Form::model($bet, ['action' => ['Admin\AdminBetController@store', 'id' => $bet->id]]) !!}
			
	{!! Form::label('user_id', 'user id') !!}
	{!! Form::number('user_id', $bet->user_id) !!}
	<br>
	{!! Form::label('match_id', 'match id') !!}
	{!! Form::number('match_id', $bet->match_id, ['readonly']) !!}
	<br>
	<br>
	{{ $bet->match->team1->name }} vs {{ $bet->match->team2->name }}
	<br>
	@if ($bet->match->team1->id == $bet->bet_team_winner_id)
	{!! Form::label('name', $bet->match->team1->name) !!}
	{!! Form::radio('bet_team_winner_id', $bet->match->team1->id, true) !!}
	
	{!! Form::label('name', $bet->match->team2->name) !!}
	{!! Form::radio('bet_team_winner_id', $bet->match->team2->id) !!}

	@else
	{!! Form::label('name', $bet->match->team1->name) !!}
	{!! Form::radio('bet_team_winner_id', $bet->match->team1->id) !!}
	
	{!! Form::label('name', $bet->match->team2->name) !!}
	{!! Form::radio('bet_team_winner_id', $bet->match->team2->id, true) !!}
	@endif

	<br>
	{!! Form::label('bet', 'Bet($)') !!}
	{!! Form::number('bet', $bet->bet, ['placeholder' => 'Put tons of money!']) !!}
	<br>
	{!! Form::submit('valider', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection