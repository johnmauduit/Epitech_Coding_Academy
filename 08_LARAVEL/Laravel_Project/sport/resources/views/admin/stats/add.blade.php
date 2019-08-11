@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Add stat') }}</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => 'Admin\AdminStatController@store']) !!}
		<div class="form-group">
		{!! Form::label('match', __('Match')) !!}
		{!! Form::select('match', $select_match, null, ['class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('player', __('Player')) !!}
		{!! Form::select('player', $select_player, null, ['class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('stat1', __('Stat 1')) !!}
		{!! Form::text('stat1', null, ['placeholder' => 'valeur de la stat 1','class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('stat2', __('Stat 2')) !!}
		{!! Form::text('stat2', null, ['placeholder' => 'valeur de la stat 2', 'class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('stat3', __('Stat 3')) !!}
		{!! Form::text('stat3', null, ['placeholder' => 'valeur de la stat 3','class' => 'form-control col-lg-6']) !!}
		</div>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminStatController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection