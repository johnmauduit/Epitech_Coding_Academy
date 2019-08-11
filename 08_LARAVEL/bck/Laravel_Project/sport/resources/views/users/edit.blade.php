@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Bonjour {{$user->name}}</h1>

    <h3>Update your user data</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        {!! Form::open(['action' => ['UserController@update', 'id' => $user->id], 'files' => true]) !!}

        {!! Form::label('name', 'name', ['class' => 'control-label']) !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control col-2']) !!}

        {!! Form::label('email', 'email') !!}
        {!! Form::text('email', $user->email) !!}

        {!! Form::label('password', 'password') !!}
        {!! Form::text('password') !!}

        {!! Form::label('password confimation', 'password_confirmation') !!}
        {!! Form::text('password_confirmation') !!}

        {!! Form::label('avatar', 'choose avatar') !!}
        {!! Form::file('avatar', old('avatar'), ['class' => 'btn-white form-control'])!!}

        {!! Form::submit('submit') !!}

        {!! Form::close() !!}

</div>
@endsection