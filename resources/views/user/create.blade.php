@extends('app')
@section('content')
<h1>Add New User</h1>
<form action="/users" method="post">
    @csrf
    <label for="name">Name : </label>
    <input type="text" name="name" placeholder="Name" required>
    @error('name')<span style="color: red">{{ $message }}</span>@enderror<br>

    <label for="email">Email : </label>
    <input type="text" name="email" placeholder="Email" required>
    @error('email')<span style="color: red">{{ $message }}</span>@enderror<br>

    <label for="password">Password : </label>
    <input type="password" name="password" placeholder="Password" required>
    @error('password')<span style="color: red">{{ $message }}</span>@enderror<br>

    <label for="checkPassword">Check Password : </label>
    <input type="password" name="checkPassword" placeholder="Password Check" required>
    @error('checkPassword')<sapn style="color: red">{{ $message }}</sapn>@enderror<br>

    <input type="submit">
</form>
@endsection
