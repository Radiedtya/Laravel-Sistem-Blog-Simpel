<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::filter(request(['search', 'category', 'author']))
                            ->paginate(9)
                            ->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Detail Post',
            'post' => $post
        ]);
    }

    public function byAuthor(User $user)
    {
        $posts = $user->posts()->latest()->paginate(9);
        return view('posts', [
            'title' => count($user->posts) . ' Articles by ' . $user->name,
            'posts' => $posts
        ]);
    }

    public function byCategory(Category $category)
    {
        $posts = $category->posts()->latest()->paginate(9);
        return view('posts', [
            'title' => count($category->posts) . ' Articles in ' . $category->name,
            'posts' => $posts
        ]);
    }
}