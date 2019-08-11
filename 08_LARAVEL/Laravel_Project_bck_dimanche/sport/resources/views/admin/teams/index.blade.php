@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Teams administration') }}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<a class="btn btn-primary" href="{{ action('Admin\AdminTeamController@create') }}">{{ __('Add team') }}</a>

	<table class="table table-hover" id="test">
		<thead>
			<tr>
				<th>{{ __('Id') }}</th>
				<th>{{ __('Name') }}</th>
				<th>{{ __('Country') }}</th>
				<th>{{ __('Flag') }}</th>
				<th>{{ __('Actions') }}</th>
			</tr>
		</thead>
		<tbody>
			@foreach($teams as $team)
				<tr>
					<td> {{ $team->id }} </td>
                    <td> {{ $team->name }} </td>
                    <td> {{ $team->country }} </td>
                    <td> {!! Html::image('img/flag/'.$team->flag, $team->flag ,array('width' => '50', 'height' => '30')) !!}</td>
					<td>
						<a class="btn btn-primary" href="{{ route('admin_team_edit', $team->id) }}">{{ __('Modify') }}</a>
						<a class="btn btn-danger" href="{{ route('admin_team_delete', $team->id) }}">{{ __('Delete') }}</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
