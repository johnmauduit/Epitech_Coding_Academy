@extends('layouts.app')

@section('content')

<div class="container">

    <h1>{{ __('Add user') }}</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        {!! Form::open(['action' => 'Admin\AdminUserController@store']) !!}

        {!! Form::label('name', __('Name')) !!}
        {!! Form::text('name') !!}
    </br>
        {!! Form::label('email', __('Email')) !!}
        {!! Form::text('email') !!}
    </br>
        {!! Form::label('password', __('Password')) !!}
        {!! Form::text('password') !!}
    </br>
        {!! Form::label('password confimation', __('Password confirmation')) !!}
        {!! Form::text('password_confirmation') !!}
    </br>
        {!! Form::label('admin', __('Admin')) !!}
        {!! Form::radio('admin', 1) !!}
        {!! Form::label('admin', __('User')) !!}
        {!! Form::radio('admin', 0, true) !!}
    </br>
        {!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
        <a class="btn btn-secondary" href="{{ route('admin_user_index') }}">{{ __('Back') }}</a>
        {{-- <a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">Retour</a> --}}

        {!! Form::close() !!}

</div>

@endsection