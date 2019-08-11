@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Bienvenue sur Unicorn Bet</h1>
    <br><br><br><br>
    <table class="table table-hover" id="test">
        <thead>
            <tr>
                <th>{{ __('Match') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
           <tr>
              <td>  {{ $match->id }} - {{ $match->team1->name }} - VS - {{ $match->team2->name }} </td>
              <td>  {{ $match->open == 1 ? __('Open') : __('Closed') }}                                                                    </td>
                <td>
                    @if($match->open == 1)
                    <a class="btn btn-primary" href="{{ action('BetController@create', [Auth::user()->id, $match->id]) }}">{{ __('Bet') }}</a>
                    @endif
                </td>
           </tr>
        @endforeach
        </tbody>
</table>
</div>
@endsection
