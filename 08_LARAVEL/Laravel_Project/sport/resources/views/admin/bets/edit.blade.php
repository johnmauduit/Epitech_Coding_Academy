@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Update data for ') }} Bet {{ $bet->id }}</h1>

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

	{!! Form::model($bet, ['action' => ['Admin\AdminBetController@store', 'id' => $bet->id]]) !!}
	<div class="form-group">
	{!! Form::label('user_id', __('User id')) !!}
	{!! Form::number('user_id', $bet->user_id, ['readonly', 'class' => 'form-control col-lg-6']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('match_id', __('Match id')) !!}
	{!! Form::number('match_id', $bet->match_id, ['readonly', 'class' => 'form-control col-lg-6']) !!}
	</div>
	<br>
	{{ $bet->match->team1->name }} vs {{ $bet->match->team2->name }}
	<br>
	<div class="form-group">
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
	</div>
	<div class="form-group">
	{!! Form::label('bet', __('Bet($$$)')) !!}
	{!! Form::number('bet', $bet->bet, ['placeholder' => 'Put tons of money!', 'class' => 'form-control col-lg-6']) !!}
	</div>
	{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
	<a class="btn btn-secondary" href="{{ action('Admin\AdminBetController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection