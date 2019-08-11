@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ __('Hello ') }} {{$user->name}}</h1>

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
<div>
        {!! Html::image('img/avatar/'. $user->avatar, $user->avatar ,array('width' => '50%', 'height' => '50%' )) !!}
</div>
	<table class="table table-hover" id="test">
		<thead>
			<tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
				<th>{{ __('Actions') }}</th>
			</tr>
		</thead>
		<tbody>
				<tr>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email}} </td>
					<td>
                         <a class="btn btn-primary" href="{{ route('user_edit', $user->id) }}">{{ __('Modify') }}</a>
					</td>
				</tr>
		</tbody>
	</table>
</div>
@endsection
