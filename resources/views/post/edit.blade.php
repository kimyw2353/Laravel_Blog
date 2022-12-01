<h1>Edit Post</h1>
<form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="user_id" value="{{$post->user_id}}">
    <input type="text" name="title" value="{{ $post->title }}" required><br>
    <input type="text" name="contents" value="{{$post->contents}}" required><br>
    <button>Save</button>
</form>
