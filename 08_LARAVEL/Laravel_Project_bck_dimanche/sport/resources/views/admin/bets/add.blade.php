@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Add bet') }}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	{{-- <h3> Admin -  Add a bet </h3> --}}

	{!! Form::open(['action' => 'Admin\AdminBetController@store']) !!}
			
	{!! Form::label('user_id', __('User id')) !!}
	{!! Form::select('user_id', $select_user) !!}

	<br>
	{!! Form::label('match_id', __('Match id')) !!}
	{!! Form::number('match_id', $match->id, ['readonly']) !!}
	<br>

	<h3>{{ __('Choose a winner !') }}</h3>
	
	{!! Form::label('name', $match->team1->name) !!}
	{!! Form::radio('bet_team_winner_id', $match->team1_id, true) !!}
	
	{!! Form::label('name', $match->team2->name) !!}
	{!! Form::radio('bet_team_winner_id', $match->team2_id) !!}

	<br>
	{!! Form::label('bet', __('Bet($$$)')) !!}
	{!! Form::number('bet', null, ['placeholder' => 'Put the money, you are betting!']) !!}
	<br>
	{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
	<a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection