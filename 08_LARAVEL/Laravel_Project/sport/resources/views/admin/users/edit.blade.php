@extends('layouts.app')

@section('content')

<div class="container">

    <h1>{{ __('Update data for ') }}  {{$user->name}}</h1>


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

        <div class="form-group">
        {!! Form::label('name', __('Name')) !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control col-lg-6']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('email', __('Email')) !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control col-lg-6']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('password', __('Password')) !!}
        {!! Form::text('password', null, ['class' => 'form-control col-lg-6']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('password confimation', __('Password confirmation')) !!}
        {!! Form::text('password_confirmation', null, ['class' => 'form-control col-lg-6']) !!}
        </div>

        {{-- {!! Form::label('admin', 'admin') !!} --}}
    @if ($user->admin == 1)
        <div class="form-group">
        {!! Form::radio('admin', 1 , true) !!} {!! Form::label('admin', __('Admin')) !!}
        <br>
        {!! Form::radio('admin', 0) !!} {!! Form::label('admin', __('User')) !!}
        </div>
        {{-- {!! Form::checkbox('admin', $user->admin, true) !!} --}}
    @else
        <div class="form-group">
        {!! Form::radio('admin', 1) !!} {!! Form::label('admin', __('Admin')) !!}
        <br>
        {!! Form::radio('admin', 0, true) !!} {!! Form::label('admin', __('User')) !!}
        </div>
        {{-- {!! Form::checkbox('admin', $user->admin) !!} --}}
    @endif
        {!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
        <a class="btn btn-secondary" href="{{ route('admin_user_index') }}">{{ __('Back') }}</a>

        {!! Form::close() !!}

</div>

@endsection