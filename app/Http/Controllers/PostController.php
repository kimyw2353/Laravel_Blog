<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post ::all();

        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $data = $request -> validate([
            'title' => 'required|max:255',
            'contents' => 'required',
            'user_id' => 'required'
        ]);

//        $post = new Post();
//        $post->title = $request->title;
//        $post->contents = $request->contents;
//        $post->user_id = $request->userId;
//        $post->save();

        Post ::create($data);

        return redirect() -> back();
    }

    public function selectPost($id)
    {
        return DB ::table('posts') -> join('users', 'users.id', '=', 'posts.user_id') -> select('users.name', 'posts.*') -> where('posts.id', $id) -> first();
    }

    public function show(Request $request, $id)
    {
        $post = $this -> selectPost($id);
        if ($post != null) {
            return view('post.show', compact('post'));
        }
        return redirect('/post');
    }

    public function edit(Request $request, $id)
    {
        $post = $this -> selectPost($id);
        if ($post != null) {
            if (Session::get('user')->id == $post->user_id) {
                return view('post.edit', compact('post'));
            }
        }
        return back();
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
           'user_id' => 'required',
           'title' => 'required',
           'contents' => 'required',
        ]);

        DB::table('posts')->where('id', $id)
            ->update([
                'title' => $data['title'],
                'contents' => $data['contents'],
                'updated_at' => now(),
            ]);

        return redirect('/post/'.$id);
    }
}
