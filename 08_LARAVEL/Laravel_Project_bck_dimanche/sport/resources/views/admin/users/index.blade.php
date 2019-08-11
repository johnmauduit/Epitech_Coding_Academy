@extends('layouts.app')

@section('content')

{{-- <h1>Hi {{$user->name}} your an admin user</h1> --}}
<div class="container">
<h1>{{ __('Users administration') }}</h1>

    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
    @endif

    <a class="btn btn-primary" href="{{ route('admin_user_add') }}">{{ __('Add user') }}</a>
    </br>
    <table class="table table-hover" id="test">
        <thead>
            <tr>
                <th>{{ __('Id') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Admin') }}</th>
                <th>{{ __('Creation Date') }}</th>
                <th>{{ __('Edition Date') }}</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->admin}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                                
                                <a class="btn btn-primary" href="{{ route('admin_user_edit', $user->id) }}">{{ __('Modify') }}</a>
                                <a class="btn btn-danger" href="{{ route('admin_user_delete', $user->id)}}">{{ __('Delete') }}</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection