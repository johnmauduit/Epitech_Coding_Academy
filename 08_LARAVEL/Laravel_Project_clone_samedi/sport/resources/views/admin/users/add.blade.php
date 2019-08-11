@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Insert your data</h1>

    <h3></h3>

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

        {!! Form::label('name', 'name') !!}
        {!! Form::text('name') !!}
    </br>
        {!! Form::label('email', 'email') !!}
        {!! Form::text('email') !!}
    </br>
        {!! Form::label('password', 'password') !!}
        {!! Form::text('password') !!}
    </br>
        {!! Form::label('password confimation', 'password_confirmation') !!}
        {!! Form::text('password_confirmation') !!}
    </br>
        {!! Form::label('admin', 'admin') !!}
        {!! Form::radio('admin', 1) !!}
        {!! Form::label('admin', 'user') !!}
        {!! Form::radio('admin', 0, true) !!}
    </br>
        {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
        <a class="btn btn-secondary" href="{{ route('admin_user_index') }}">Retour</a>
        {{-- <a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">Retour</a> --}}

        {!! Form::close() !!}

</div>

@endsection