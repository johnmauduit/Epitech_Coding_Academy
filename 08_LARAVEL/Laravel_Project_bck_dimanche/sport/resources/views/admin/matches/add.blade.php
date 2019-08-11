@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Add match') }}</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::open(['action' => 'Admin\AdminMatchController@store']) !!}
		{!! Form::label('team1', __('Team 1')) !!}
		{!! Form::select('team1', $select) !!}
		<br>
		{!! Form::label('team2', __('Team 2')) !!}
		{!! Form::select('team2', $select) !!}
		<br>
		{!! Form::label('open', __('Open')) !!}
		{!! Form::checkbox('open', 1) !!}
		<br>
		{!! Form::label('winner', __('Winner')) !!}
		{!! Form::select('winner', $select_winner) !!}
		<br>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminMatchController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection