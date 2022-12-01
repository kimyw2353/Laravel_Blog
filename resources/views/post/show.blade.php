@php use Illuminate\Support\Facades\Session; @endphp
@extends('app')
@section('content')
    <div>
        <ul style="list-style: none">
            <li><h2>{{ $post->title ?? 'Title'}} / ({{ $post->name }})</h2></li>
            <li>작성일 : {{ date('Y/m/j h:i A', strtotime($post->created_at))}} | 수정일 : {{ date('Y/m/j h:i A', strtotime($post->updated_at))}}</li>
            <li><h3>내용 : {{ $post->contents }}</h3></li>
            @if(Session::get('user')->id == $post->user_id)
            <li>
                <form action="/post/{{ $post->id }}/edit" method="get">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$post->user_id}}">
                    <button >Post update</button>
                </form></li>
            @endif
        </ul>
    </div>
@endsection
