@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Matches administration') }}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<a class="btn btn-primary mb-3" href="{{ action('Admin\AdminMatchController@add') }}">{{ __('Add match') }}</a>
	<br><br>
	<table id="test" class="table table-hover">
		<thead>
			<tr>
				<th>{{ __('Team 1') }}</th>
				<th>{{ __('Team 2') }}</th>
				<th>{{ __('Open') }}</th>
				<th>{{ __('Winner') }}</th>
				<th>{{ __('Date') }}</th>
				<th>{{ __('Actions') }}</th>
			</tr>
		</thead>
		<tbody>
			@foreach($matches as $match)
				<tr>
					<td> {{ $match->team1->name }} </td>
					<td> {{ $match->team2->name }} </td>
					<td> @if($match->open == 1) Oui @else Non @endif </td>
					<td> {{ $match->winner->name }} </td>
					<td> {{ $match->match_start }} </td>
					<td>
						<a class="btn btn-primary" href="{{ route('admin_match_edit', $match->id) }}">{{ __('Modify') }}</a>
						<a class="btn btn-danger" href="{{ route('admin_match_delete', $match->id) }}">{{ __('Delete') }}</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection