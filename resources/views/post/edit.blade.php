<h1>Edit Post</h1>
<form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="user_id" value="{{$post->user_id}}">
    <input type="text" name="title" value="{{ $post->title }}" required>
    @error('title'){{$message}}@enderror<br>
    <textarea name="contents" id="" cols="30" rows="10">{{$post->contents}}</textarea>
    @error('contents'){{$message}}@enderror<br>
    <button>Save</button>
</form>
