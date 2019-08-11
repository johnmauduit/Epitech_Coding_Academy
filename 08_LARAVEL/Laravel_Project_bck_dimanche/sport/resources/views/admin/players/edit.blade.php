@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Update data for ') }}  {{$team->name}}</h1>

	

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	{!! Form::model($player, ['action' => ['Admin\AdminPlayerController@store', 'id' => $player->id]]) !!}
		{!! Form::label('name', __('Name')) !!}
		{!! Form::text('name') !!}
		<br>
		{!! Form::label('name', __('Team')) !!}
		{!! Form::select('team_id', $select, $player->team->id) !!}
		<br>
		{!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">{{ __('Back') }}</a>
	{!! Form::close() !!}
</div>
@endsection