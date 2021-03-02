<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::index();
        $recent_posts = Post::latest()->limit(3)->get();
        $title = 'News';
        return view('news', compact('posts', 'recent_posts', 'title'));
    }

    public function show($slug)
    {
        $post = Post::getBySlug($slug);
        $posts = Post::latest()->limit(3)->get();
        $title = $post->title;
        return view('detail_news', compact('post', 'posts', 'title'));
    }
}