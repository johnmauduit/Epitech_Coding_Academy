@extends('.layouts.app')

@section('content')
<div class="container">
	<h1>{{ __('Players administration') }}</h1>
	
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<a class="btn btn-primary" href="{{ action('Admin\AdminPlayerController@add') }}">{{ __('Add player') }}</a>

	<table id="test" class="table table-hover">
		<thead>
			<tr>
				<th>{{ __('Name') }}</th>
				<th>{{ __('Team') }}</th>
				<th>{{ __('Actions') }}</th>
			</tr>
		</thead>
		<tbody>
			@foreach($players as $player)
				<tr>
					<td> {{ $player->name }} </td>
					<td> {{ $player->team->name }} </td>
					<td>
						<a class="btn btn-primary" href="{{ route('admin_player_edit', $player->id) }}">{{ __('Modify') }}</a>
						<a class="btn btn-danger" href="{{ route('admin_player_delete', $player->id) }}">{{ __('Delete') }}</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection