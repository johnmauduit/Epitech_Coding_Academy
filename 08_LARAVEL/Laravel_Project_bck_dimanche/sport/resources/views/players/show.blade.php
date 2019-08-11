@extends('.layouts.app')


@section('content')
	<h1>{{ __('Player page') }}</h1>

	{{ __('Player name :') }} {{ $player->name }}
	<br>
	{{ __('Team name :') }} {{ $player->team->name }}
@endsection