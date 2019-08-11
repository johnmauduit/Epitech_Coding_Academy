@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Add bet') }}</h1>

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

	{{-- <h3> Admin -  Add a bet </h3> --}}

	{!! Form::open(['action' => 'Admin\AdminBetController@store']) !!}
	<div class="form-group">
	{!! Form::label('user_id', __('User id')) !!}
	{!! Form::select('user_id', $select_user, null, ['class' => 'form-control col-lg-6']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('match_id', __('Match id')) !!}
	{!! Form::number('match_id', $match->id, ['readonly','class' => 'form-control col-lg-6']) !!}
	</div>

	<h3>{{ __('Choose a winner !') }}</h3>
	<div class="form-group">
	{!! Form::label('name', $match->team1->name) !!}
	{!! Form::radio('bet_team_winner_id', $match->team1_id, true) !!}
	
	{!! Form::label('name', $match->team2->name) !!}
	{!! Form::radio('bet_team_winner_id', $match->team2_id) !!}
	</div>
	<div class="form-group">
	{!! Form::label('bet', __('Bet($$$)')) !!}
	{!! Form::number('bet', null, ['placeholder' => 'Put the money, you are betting!', 'class' => 'form-control col-lg-6']) !!}
	</div>
	{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
	<a class="btn btn-secondary" href="{{ action('Admin\AdminBetController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection