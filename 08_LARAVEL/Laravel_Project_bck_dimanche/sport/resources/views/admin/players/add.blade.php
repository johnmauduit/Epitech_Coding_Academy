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
		{!! Form::label('name', 'name') !!}
		{!! Form::text('name', null, ['placeholder' => 'Nom du player']) !!}
		<br>
		{!! Form::label('name', 'team') !!}
		{!! Form::select('team_id', $select) !!}
		<br>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection