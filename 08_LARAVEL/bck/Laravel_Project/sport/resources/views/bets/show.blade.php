@extends('layouts.app')

@section('content')

<div class="container">
<h1>My bet list</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif


	<table class="table table-hover" id="test">
		<thead>
			<tr>
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
					<td> {{ $bet->match->team1->name }} vs {{ $bet->match->team2->name }}</td>
                    <td> {{ $bet->bet_team_winner->name }} </td>
					<td> ${{ $bet->bet }}</td>
					<td> {{ $bet->created_at }}</td>
                    <td> </td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection