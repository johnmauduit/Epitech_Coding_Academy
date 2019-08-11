@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @lang ('messages.welcome')
                    {{-- You are logged in! --}}
                </div>
            </div>
        </div>
    </div>

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
                <td> <a class="btn btn-primary" href="bets/{{Auth::user()->id}}/{{ $match->id }}/">{{ __('Bet') }}</a> </td>
           </tr>
        @endforeach
        </tbody>
</table>
</div>
@endsection
