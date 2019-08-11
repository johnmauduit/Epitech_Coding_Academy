@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Bets') }}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<h3>{{ __('Time to bet') }} {{ $user->name }} !</h3>

			{!! Form::open(['action' => 'BetController@store']) !!}
			
			{!! Form::hidden('user_id', $user->id) !!}
			{!! Form::hidden('match_id', $match->id) !!}
			<br>
			<h3>{{ __('Choose a winner') }} !</h3>
			{!! Form::label('name', $team1->name) !!}
			{!! Form::radio('bet_team_winner_id', $team1->id) !!}
			
			{!! Form::label('name', $team2->name) !!}
			{!! Form::radio('bet_team_winner_id', $team2->id) !!}
			<br>
			{!! Form::label('bet', __('Bet($$$)')) !!}
			{!! Form::number('bet', null, ['placeholder' => __('Put the money, you are betting !')]) !!}
			<br>
			{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}

@endsection