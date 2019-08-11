@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>Administration des Players</h1>
	<div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            @lang ('messages.welcome')
            {{-- You are logged in! --}}
        </div>
    </div>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<a class="btn btn-primary" href="{{ action('Admin\AdminPlayerController@add') }}">Ajouter un player</a>

	<table id="test" class="table table-hover">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Equipe</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($players as $player)
				<tr>
					<td> {{ $player->name }} </td>
					<td> {{ $player->team->name }} </td>
					<td>
						<a class="btn btn-primary" href="{{ route('admin_player_edit', $player->id) }}">Modifier</a>
						<a class="btn btn-danger" href="{{ route('admin_player_delete', $player->id) }}">Supprimer</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection