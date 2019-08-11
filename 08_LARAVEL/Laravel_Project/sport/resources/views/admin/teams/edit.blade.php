@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ __('Update data for ') }}  {{$team->name}}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($team, ['action' => ['Admin\AdminTeamController@store', 'id' => $team->id ], 'files' => true]) !!}
    <div class="form-group">
    {!! Form::label('name', __('Name')) !!}
    {!! Form::text('name', $team->name, ['class' => 'form-control col-lg-6']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('country', __('Country')) !!}
    {!! Form::text('country', $team->country, ['class' => 'form-control col-lg-6']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('flag', __('Flag')) !!} <br>
    {!! Form::file('flag', old('flag'), ['class'=>'btn-white form-control', 'placeholder'=>'Enter image Url']) !!}
    </div>
    {!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
    <a class="btn btn-secondary" href="{{ route('admin_team_index') }}">{{ __('Back') }}</a>
    {!! Form::close() !!}

</div>
@endsection