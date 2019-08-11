@extends('layouts.app')

@section('content')
<div class="container">
    
    <h3>Create a team</h3>

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
    
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name') !!}
    
        {!! Form::label('country', 'Pays') !!}
        {!! Form::text('country') !!}
    
        {!! Form::label('flag', 'Drapeau') !!}
        {!! Form::file('flag', old('flag'), ['class'=>'btn-white form-control', 'placeholder'=>'Enter image Url']) !!}

    
        {!! Form::submit('submit') !!}
    
        {!! Form::close() !!}

</div>
@endsection