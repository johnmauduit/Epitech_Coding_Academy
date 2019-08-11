@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>{{ __('Add team') }}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
        {!! Form::open(['action' => 'Admin\AdminTeamController@store', 'files' => true]) !!}
            <div class="form-group">
            {!! Form::label('name', __('Name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control col-lg-6']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('country', __('Country')) !!}
            {!! Form::text('country', null, ['class' => 'form-control col-lg-6']) !!}
            </div>
            <div class="custom-file col-lg-6">
            {!! Form::file('flag', old('flag'), ['class'=> 'custom-file-input col-lg-6', 'placeholder'=>'Enter image Url']) !!}
            {!! Form::label('flag', __('Flag'), ['class'=> 'custom-file-label']) !!}
            </div>
            <br><br>
            <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-secondary" href="{{ route('admin_team_index') }}">{{ __('Back') }}</a>
            </div>
        {!! Form::close() !!}

</div>
@endsection