@extends('layouts.app')

@section('content')

<div class="container">

    <h1>{{ __('Hello ') }} {{$user->name}}</h1>

    <h3>{{ __('Update your data ') }}</h3>

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

        {!! Form::label('name', __('Name'), ['class' => 'control-label']) !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control col-2']) !!}

        {!! Form::label('email', __('Email')) !!}
        {!! Form::text('email', $user->email) !!}

        {!! Form::label('password', __('Password')) !!}
        {!! Form::text('password') !!}

        {!! Form::label('password confimation', __('Password confirmation')) !!}
        {!! Form::text('password_confirmation') !!}

        {!! Form::label('avatar', __('Choose an avatar')) !!}
        {!! Form::file('avatar', old('avatar'), ['class' => 'btn-white form-control'])!!}

        {!! Form::submit('Submit') !!}

        {!! Form::close() !!}

</div>
@endsection