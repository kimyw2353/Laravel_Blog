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
