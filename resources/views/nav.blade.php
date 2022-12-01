@php use Illuminate\Support\Facades\Session; @endphp
<ul style="list-style: none;">
    <li><a href="/">Home</a></li>
    <li><a href="/post">PostList</a></li>
    @if( !Session::has('user') )
        <li><a href="/login">Login</a></li>
    @elseif(Session::has('user'))
        <li><a href="/logout">Logout</a></li>
    @endif
    <li><a href="/users">User List</a></li>
</ul>
