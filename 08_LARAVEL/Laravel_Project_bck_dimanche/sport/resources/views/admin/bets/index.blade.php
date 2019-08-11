@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Bets list administration') }}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	

	<div class="dropdown show">
			<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				{{ __('Choose matches. Add a bet.') }}
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
				<th>{{ __('User') }}</th>
				<th>{{ __('Match') }}</th>
                <th>{{ __('Team bet on') }}</th>
				<th>{{ __('Money') }} </th>
				<th>{{ __('Date') }}</th>
				<th>{{ __('Action') }}</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bets as $bet)
				<tr>
					<td>{{ $bet->user_id }} </td>
					<td>{{ $bet->match->team1->name }} vs {{ $bet->match->team2->name }}</td>
                    <td>{{ $bet->bet_team_winner->name }} </td>
					<td>{{ $bet->bet }}</td>
					<td>{{ $bet->created_at }}</td>
                    <td> 	
						<a class="btn btn-primary" href="{{ route('admin_bet_edit', $bet->id) }}">{{ __('Modify') }}</a>
						<a class="btn btn-danger" href="{{ route('admin_bet_delete', $bet->id) }}">{{ __('Delete') }}</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection