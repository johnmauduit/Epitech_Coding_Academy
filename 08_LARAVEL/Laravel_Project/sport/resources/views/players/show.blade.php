@extends('.layouts.app')


@section('content')
	<h1>{{ __('Player page') }}</h1>

	{{ __('Player name :') }} {{ $player->name }}
	<br>
	{{ __('Team name :') }} {{ $player->team->name }}

	<div id="datas_container" data-datas="{{ $stats_list }}"></div>
	<div id="line_chart_container"></div>

	
@endsection