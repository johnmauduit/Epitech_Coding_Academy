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
                                          

                    <div class="form-group">
                        {!! Form::label('name', __('Name')) !!}
                        {!! Form::text('name', null, ['class' => 'form-control col-lg-6']) !!}
                    </div>
       
                    <div class="form-group">
                    {!! Form::label('email', __('Email')) !!}
                    {!! Form::text('email', null, ['class' => 'form-control col-lg-6']) !!}
                    </div>

                    <div class="form-group">
                    {!! Form::label('password', __('Password')) !!}
                    {!! Form::text('password', null, ['class' => 'form-control col-lg-6']) !!}
                    </div>

                    <div class="form-group">
                    {!! Form::label('password confimation', __('Password confirmation')) !!}
                    {!! Form::text('password_confirmation', null, ['class' => 'form-control col-lg-6']) !!}
                    </div>

                    <div class="form-group">
                    {!! Form::radio('admin', 0, true) !!} {!! Form::label('admin', __('User')) !!}
                    <br>
                    {!! Form::radio('admin', 1) !!} {!! Form::label('admin', __('Admin')) !!}
                    </div>

                    <div class="form-group">
                    {!! Form::submit( __('Submit'), ['class' => 'btn btn-primary']) !!}
                    <a class="btn btn-secondary" href="{{ route('admin_user_index') }}">{{ __('Back') }}</a>
                    {{-- <a class="btn btn-secondary" href="{{ action('Admin\AdminPlayerController@index') }}">Retour</a> --}}
                    </div>
                    {!! Form::close() !!}


</div>


@endsection