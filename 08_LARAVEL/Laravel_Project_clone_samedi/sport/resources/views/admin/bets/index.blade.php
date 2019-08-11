@extends('layouts.app')

@section('content')

<div class="container">
<h1>Admin bet list</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	

	<div class="dropdown show">
			<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Choose matches. Add a bet.
			</a>
		  
			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				@foreach($matches as $match)
			  		<a class="dropdown-item" href="{{ route('admin_bet_create', $match->id) }}">{{$match->id.' - '.$match->team1->name.' vs '.$match->team2->name}}</a>
			  	@endforeach
			</div>
		  </div>


	<br><br>

	<table class="table table-hover" id="test">
		<thead>
			<tr>
				<th>User</th>
				<th>Match</th>
                <th>Team bet on</th>
				<th>Money </th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bets as $bet)
				<tr>
					<td>  {{ $bet->user_id }} </td>
					<td>  {{ $bet->match->team1->name }} vs {{ $bet->match->team2->name }}</td>
                    <td>  {{ $bet->bet_team_winner->name }} </td>
					<td> ${{ $bet->bet }}</td>
					<td>  {{ $bet->created_at }}</td>
                    <td> 	<a class="btn btn-primary" href="{{ route('admin_bet_edit', $bet->id) }}">Modifier</a>
							<a class="btn btn-danger" href="{{ route('admin_bet_delete', $bet->id) }}">Supprimer</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection