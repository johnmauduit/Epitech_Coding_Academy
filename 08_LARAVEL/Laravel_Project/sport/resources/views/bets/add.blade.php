@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Bets') }}</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<h3>{{ __('Time to bet') }} {{ $user->name }} !</h3>

	{!! Form::open(['action' => 'BetController@store']) !!}
	
	<div class="form-group">
	{!! Form::hidden('user_id', $user->id) !!}
	{!! Form::hidden('match_id', $match->id) !!}
	</div>
	<h3>{{ __('Choose a winner') }} !</h3>
	{!! Form::radio('bet_team_winner_id', $team1->id) !!}
	{!! Form::label('name', $team1->name) !!}
	<div class="form-group">
	{!! Form::radio('bet_team_winner_id', $team2->id) !!}
	{!! Form::label('name', $team2->name) !!}
	</div>
	<div class="form-group">
	{!! Form::label('bet', __('Bet($$$)')) !!}
	{!! Form::number('bet', null, ['placeholder' => __('Put the money, you are betting !'), 'class' => 'form-control col-lg-6']) !!}
	</div>
	{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
	<a href="{{ action('HomeController@index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
	{!! Form::close() !!}

@endsection