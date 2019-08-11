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

    <div>
        @foreach($matches as $match)
            <div class="alert">
                {{ $match->id }} - {{ $match->team1->name }} - VS - {{ $match->team2->name }}
                <a class="btn btn-primary" href="bets/{{Auth::user()->id}}/{{ $match->id }}/">Parier</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
