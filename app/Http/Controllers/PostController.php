<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
        //factory(Post::class, 100)->create();
        //factory(User::class, 10)->create();
        //factory(Customer::class, 10)->create();
        $posts = Post::allPosts();

        return view('post.index', compact('posts'));
    }
}
