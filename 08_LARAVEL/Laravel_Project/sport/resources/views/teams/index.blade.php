@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ __('Teams') }}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif


	<table class="table table-hover" id="test">
		<thead>
			<tr>
				<th>{{ __('Id') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Country') }}</th>
				<th>{{ __('Flag') }}</th>
				<th>{{ __('See') }}</th>
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
						<a class="btn btn-primary" href="{{ action('TeamController@show', $team->id) }}">{{ __('See') }}</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection