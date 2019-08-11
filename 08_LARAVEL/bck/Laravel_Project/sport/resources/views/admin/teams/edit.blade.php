@extends('layouts.app')

@section('content')
<div class="container">

<h1>Bonjour {{$team->name}}</h1>

<h3>Update your data</h3>

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

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', $team->name) !!}

    {!! Form::label('country', 'Pays') !!}
    {!! Form::text('country', $team->country) !!}

    {!! Form::label('flag', 'Drapeau') !!}
    {!! Form::file('flag', old('flag'), ['class'=>'btn-white form-control', 'placeholder'=>'Enter image Url']) !!}

    {!! Form::submit('submit') !!}

    {!! Form::close() !!}

</div>
@endsection