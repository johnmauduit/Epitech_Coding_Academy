@extends('layouts.app')

@section('content')
<div class="container">
	
	<div class="row">

		<div class="col">

			<div class="row">
			
				<div class="col">
					<h1>{{ __('Team') }} {{$team->name}}</h1>
					<h3>{{$team->country}}</h3>
				</div>
			

				<div class="col">
				{!! Html::image('img/flag/'.$team->flag, $team->flag , array('width' => '300px', 'height' => '180px')) !!}
				</div>
			</div>

		<div>
			<br><br>
			<h2>{{ __('Last matches') }}</h2>
			<div>
				@foreach($vd_list as $match)
					<div class="alert alert-{{ ($match->winner_id == $team->id) ? 'success' : 'danger' }}">
						{{ $match->team1->name }} - VS - {{ $match->team2->name }} /////////////// {{ ($match->winner_id == $team->id) ? __('Victory') : __('Defeat') }}
					</div>
				@endforeach
			</div>
		</div>
	</div>


	<div class="col">
    <div id="graph_values" data-ratio="{{ $vd_datas }}"></div>  {{-- on va devoir regarder comment est affiche les defaites et victoires --}}

    <div>
    	<div id="ratio_vd"></div>
    	<br><br>

    	<h2>{{ __('Globals stats') }}</h2>
    	<div class="card-deck">
	    	<div class="card text-center py-3">
	    		<img src="{{ asset('img/icons/hit-icon.png') }}" width="40%" class="mx-auto d-block">
	    		<div class="card-body h3">
						{{ __('Put :') }}<strong> {{ $team_stats['stat1'] }} {{ __('hits') }}</strong>
	    		</div>
	    	</div>
	    	<div class="card text-center py-3">
	    		<img src="{{ asset('img/icons/blood-icon.png') }}" width="40%" class="mx-auto d-block">
	    		<div class="card-body h3">
						{{ __('Sank : ') }}<strong>{{ $team_stats['stat2'] }} {{ __('liters of blood') }}</strong> 
	    		</div>
	    	</div>
	    	<div class="card text-center py-3">
	    		<img src="{{ asset('img/icons/unicorn-icon.png') }}" width="40%" class="mx-auto d-block">
	    		<div class="card-body h3">
						{{ __('Skewer is opponent ') }}<strong>{{ $team_stats['stat3'] }} {{ __('times') }}</strong>
	    		</div>
	    	</div>
    		</div>
   		 </div>
	</div>
</div>
@endsection