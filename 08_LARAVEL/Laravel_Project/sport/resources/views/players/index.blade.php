@extends('.layouts.app')


@section('content')
	<h1>Liste des Players</h1>

	<table>
		<thead>
			<tr>
				<th>Nom</th>
				<th>Equipe</th>
				<th>Voir</th>
			</tr>
		</thead>
		<tbody>
			@foreach($players as $player)
				<tr>
					<td>{{ $player->name }}</td>
					<td>{{ $player->team->name }}</td>
					<td>
						<a class="btn btn-primary" href="{{ action('PlayerController@show', $player->id) }}">Voir</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection