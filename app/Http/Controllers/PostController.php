<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
        factory(Post::class, 100)->create();
        $posts = Post::allPosts();

        return view('post.index', compact('posts'));
    }
}
