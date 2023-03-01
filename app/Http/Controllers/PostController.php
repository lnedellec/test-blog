<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('article', [
            'post' => $post
        ]);
    }

    public function new()
    {
        return view('form');
    }
}
