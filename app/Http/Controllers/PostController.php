<?php

namespace App\Http\Controllers;

use App\Jobs\UpdatePost;
use App\Models\Post;

class PostController extends Controller
{
    public function index(UpdatePost $updatePost)
    {
        return view('Post/Index');
    }

    public function show(Post $post)
    {
        return view('Post/Show', compact('post'));

    }
}
