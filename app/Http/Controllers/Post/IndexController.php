<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(3);
        $randomPosts = Post::get()->random(1);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(1);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
