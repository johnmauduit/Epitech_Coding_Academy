@extends('.layouts.app')

@section('content')
<div class="container">

	<h1>{{ __('Update data for ') }} Stat</h1>
	
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => ['Admin\AdminStatController@store', 'id' => $stat->id]]) !!}
		<div class="form-group">
		{!! Form::label('match', __('Match')) !!}
		{!! Form::select('match', $select_match, $stat->match_id, ['class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('player', __('Player')) !!}
		{!! Form::select('player', $select_player, $stat->player_id, ['class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('stat1', __('Stat 1')) !!}
		{!! Form::text('stat1', $stat->stat1, ['placeholder' => 'valeur de la stat 1', 'class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('stat2', __('Stat 2')) !!}
		{!! Form::text('stat2', $stat->stat2, ['placeholder' => 'valeur de la stat 2', 'class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('stat3', __('Stat 3')) !!}
		{!! Form::text('stat3', $stat->stat3, ['placeholder' => 'valeur de la stat 3', 'class' => 'form-control col-lg-6']) !!}
		</div>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminStatController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection