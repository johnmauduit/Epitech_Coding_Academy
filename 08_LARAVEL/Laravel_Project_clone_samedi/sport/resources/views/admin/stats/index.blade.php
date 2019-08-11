@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>Administration des Stats</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<a class="btn btn-primary" href="{{ action('Admin\AdminStatController@add') }}">Ajouter une stat</a>
	<br><br>
	<table id="test" class="table table-hover">
		<thead>
			<tr>
				<th>Match</th>
				<th>Player</th>
				<th>Stat 1</th>
				<th>Stat 2</th>
				<th>Stat 3</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($stats as $stat)
				<tr>
					<td> {{ $stat->match_id }} </td>
					<td> {{ $stat->player->name }} </td>
					<td> {{ $stat->stat1 }} </td>
					<td> {{ $stat->stat2 }} </td>
					<td> {{ $stat->stat3 }} </td>
					<td>
						<a class="btn btn-primary" href="{{ route('admin_stat_edit', $stat->id) }}">Modifier</a>
						<a class="btn btn-danger" href="{{ route('admin_stat_delete', $stat->id) }}">Supprimer</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection