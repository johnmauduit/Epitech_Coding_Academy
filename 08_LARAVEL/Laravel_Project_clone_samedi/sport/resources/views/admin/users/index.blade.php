@extends('layouts.app')

@section('content')

{{-- <h1>Hi {{$user->name}} your an admin user</h1> --}}
<div class="container">

    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
    @endif

    <a class="btn btn-primary" href="{{ route('admin_user_add') }}">Ajouter un user</a>
    </br>
    <table class="table table-hover" id="test">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Creation Date</th>
                <th>Edition Date</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->admin}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                                
                                <a class="btn btn-primary" href="{{ route('admin_user_edit', $user->id) }}">Modifier</a>
                                <a class="btn btn-danger" href="{{ route('admin_user_delete', $user->id)}}">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection