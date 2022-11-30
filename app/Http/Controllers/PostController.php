<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'contents' => 'required',
            'user_id' => 'required'
        ]);

//        $post = new Post();
//        $post->title = $request->title;
//        $post->contents = $request->contents;
//        $post->user_id = $request->userId;
//        $post->save();

        Post::create($data);

        return redirect()->back();

    }
}
