@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>Administration des Matches</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<a class="btn btn-primary" href="{{ action('Admin\AdminMatchController@add') }}">Ajouter un match</a>
	<br><br>
	<table id="test" class="table table-hover">
		<thead>
			<tr>
				<th>Equipe1</th>
				<th>Equipe2</th>
				<th>Ouvert</th>
				<th>Vainqueur</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($matches as $match)
				<tr>
					<td> {{ $match->team1->name }} </td>
					<td> {{ $match->team2->name }} </td>
					<td> @if($match->open == 1) Oui @else Non @endif </td>
					<td> {{ $match->winner->name }} </td>
					<td>
						<a class="btn btn-primary" href="{{ route('admin_match_edit', $match->id) }}">Modifier</a>
						<a class="btn btn-danger" href="{{ route('admin_match_delete', $match->id) }}">Supprimer</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection