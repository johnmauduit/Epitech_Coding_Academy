@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Add player') }}</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => 'Admin\AdminPlayerController@store']) !!}
		<div class="form-group">
		{!! Form::label('name', 'name') !!}
		{!! Form::text('name', null, ['placeholder' => 'Nom du player', 'class' => 'form-control col-lg-6']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('name', 'team') !!}
		{!! Form::select('team_id', $select, null, ['class' => 'form-control col-lg-6']) !!}
		</div>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection