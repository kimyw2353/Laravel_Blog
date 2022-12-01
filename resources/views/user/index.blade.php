@extends('app')

@section('title', 'About User List')

@section('content')
    <h1>Welcome to Users Page!</h1>
    <a href="/users/create">Add New User</a>
    @forelse($users as $user)
        <p>
            <strong>{{ $user->name }} </strong>({{ $user->email }})</p>
    @empty
        <p>No user</p>
    @endforelse
@endsection
