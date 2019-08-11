@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Update data for ') }} {{$match->id}}</h1>


	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => ['Admin\AdminMatchController@store', 'id' => $match->id]]) !!}
		<div class="form-group">
		{!! Form::label('team1', __('Team 1')) !!}
		{!! Form::select('team1', $select, $match->team1_id, ['class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('team2', __('Team 2')) !!}
		{!! Form::select('team2', $select, $match->team2_id, ['class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		<label>{{ __('match_start') }}</label>
		<input class="form-control col-lg-6" type="datetime-local" name="match_start" value="{{ $match->match_start }}">
		</div>
        <div class="form-group">
		@if($match->open == 1)
		{!! Form::checkbox('open', 1, true) !!}
		@else
		{!! Form::checkbox('open', 1) !!}
		@endif
		{!! Form::label('open', __('Open'), ['class' => 'form-check-label']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('winner', __('Winner')) !!}
		{!! Form::select('winner', $select_winner, $match->winner_id, ['class' => 'form-control col-lg-6']) !!}
		</div>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminMatchController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>	
@endsection