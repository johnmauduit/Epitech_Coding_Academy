@extends('layouts.app')

@section('content')
<div class="container">
    <p>It's the profile of the team {{$team->name}}</p>
    <p>from the country {{$team->country}}</p>
    <p>with the flag {{$team->flag}}</p>

    <div id="graph_values" data-ratio="{{ $vd_datas }}"></div>

    <div>
    	<div id="ratio_vd"></div>
    	<br><br>

    	<h2>Statistiques globales</h2>
    	<div class="card-deck">
	    	<div class="card text-center py-3">
	    		<img src="{{ asset('img/icons/hit-icon.png') }}" width="40%" class="mx-auto d-block">
	    		<div class="card-body h3">
	    			A mis : <strong> {{ $team_stats['stat1'] }} coups</strong>
	    		</div>
	    	</div>
	    	<div class="card text-center py-3">
	    		<img src="{{ asset('img/icons/blood-icon.png') }}" width="40%" class="mx-auto d-block">
	    		<div class="card-body h3">
	    			A fait couler : <strong>{{ $team_stats['stat2'] }} litres de sang</strong> 
	    		</div>
	    	</div>
	    	<div class="card text-center py-3">
	    		<img src="{{ asset('img/icons/unicorn-icon.png') }}" width="40%" class="mx-auto d-block">
	    		<div class="card-body h3">
	    			A embroché son adversaire <strong>{{ $team_stats['stat3'] }} fois</strong>
	    		</div>
	    	</div>
    	</div>
    </div>

    <br><br>
    <div>
    	<h2>Derniers matches</h2>
    	<div>
    		@foreach($vd_list as $match)
    			<div class="alert alert-{{ ($match->winner_id == $team->id) ? 'success' : 'danger' }}">
    				{{ $match->team1->name }} - VS - {{ $match->team2->name }} /////////////// {{ ($match->winner_id == $team->id) ? 'Victory' : 'Defeat' }}
    			</div>
    		@endforeach
    	</div>
    </div>
<div>
@endsection