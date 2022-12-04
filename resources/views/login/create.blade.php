@extends('app')
@section('title', 'Login Page')
@section('content')
    <div>
        <h1>Login Page</h1>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button>Login</button>
        </form>
        <br>
        <a href="/users/create">회원가입</a>
    </div>
@endsection
