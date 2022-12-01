@php use Illuminate\Support\Facades\Session; @endphp
    <!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Blog Home')</title>
    </head>
    <body>
        @if( Session::has('user'))
            <p>{{ Session::get('user')->name }}님 로그인중 ...</p>
        @endif
        @include('nav')
        @yield('content')
    </body>
</html>
