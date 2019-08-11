@extends('.layouts.app')


@section('content')
	<h1>Page d'un Player</h1>

	nom du player: {{ $player->name }}
	<br>
	nom de son équipe: {{ $player->team->name }}
@endsection