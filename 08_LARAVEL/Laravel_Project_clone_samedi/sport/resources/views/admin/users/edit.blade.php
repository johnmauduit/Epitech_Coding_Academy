@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Bonjour {{$user->name}}</h1>

    <h3>Update your admin data</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        {!! Form::open(['action' => ['Admin\AdminUserController@update', 'id' => $user->id]]) !!}

        {!! Form::label('name', 'name') !!}
        {!! Form::text('name', $user->name) !!}

        {!! Form::label('email', 'email') !!}
        {!! Form::text('email', $user->email) !!}

        {!! Form::label('password', 'password') !!}
        {!! Form::text('password') !!}

        {!! Form::label('password confimation', 'password_confirmation') !!}
        {!! Form::text('password_confirmation') !!}

        {{-- {!! Form::label('admin', 'admin') !!} --}}
    @if ($user->admin == 1)
        {!! Form::label('admin', 'admin') !!}
        {!! Form::radio('admin', 1 , true) !!}
        {!! Form::label('admin', 'user') !!}
        {!! Form::radio('admin', 0) !!}
        {{-- {!! Form::checkbox('admin', $user->admin, true) !!} --}}
    @else
        {!! Form::label('admin', 'admin') !!}
        {!! Form::radio('admin', 1) !!}
        {!! Form::label('admin', 'user') !!}
        {!! Form::radio('admin', 0, true) !!}
        {{-- {!! Form::checkbox('admin', $user->admin) !!} --}}
    @endif
        {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
        <a class="btn btn-secondary" href="{{ route('admin_user_index') }}">Retour</a>
        {{-- <a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">Retour</a> --}}

        {!! Form::close() !!}

</div>

@endsection