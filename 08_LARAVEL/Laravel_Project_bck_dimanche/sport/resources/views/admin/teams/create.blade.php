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
    
        {!! Form::label('name', __('Name')) !!}
        {!! Form::text('name') !!}
    
        {!! Form::label('country', __('Country')) !!}
        {!! Form::text('country') !!}
    
        {!! Form::label('flag', __('Flag')) !!}
        {!! Form::file('flag', old('flag'), ['class'=>'btn-white form-control', 'placeholder'=>'Enter image Url']) !!}

    
        {!! Form::submit('Submit') !!}
        <a class="btn btn-secondary" href="{{ route('admin_user_index') }}">{{ __('Back') }}</a>
        {!! Form::close() !!}

</div>
@endsection