@php use Illuminate\Support\Facades\Session; @endphp
@extends('app')

@section('title', 'About Post List')

@section('content')
    <h1>Welcome to Laravel Post List!</h1>
    {{ $test ?? ''}}
    <p style="color: red">
        @error('title') {{ $message }} @enderror
    </p>
    <form action="/post" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ Session::get('user')->id }}">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="contents" placeholder="Contents">
        <button>Add Post</button>
    </form>
    <ul>
        @forelse($posts as $post)
            <li><a href="/post/{{ $post->id }}">{{ $post->title }}</a></li>
        @empty
            <li>No Post</li>
        @endforelse
    </ul>
    <p>with some text Lorem Lorem ipsum dolor sit amet,
       consectetur adipisicing elit. At ea facilis hic id inventore minima nulla tempora,
       tenetur voluptates voluptatibus. Aperiam assumenda beatae minima mollitia neque nulla
       sequi totam ut!
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consequuntur eligendi, nobis non nulla quibusdam repellat voluptatem. Aspernatur nemo, porro. Commodi dolore laboriosam molestiae nulla provident quisquam saepe sequi.</p>
@endsection
