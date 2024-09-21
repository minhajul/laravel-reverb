<?php

namespace App\Http\Controllers;

use App\Events\SendBlogReadCountEvent;
use App\Events\SendMessageEvent;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'status' => 'success',
            'blogs' => Blog::query()->take(3)->get()
        ]);
    }

    public function show(Blog $blog)
    {
        $blog->increment('read_count');

        broadcast(new SendBlogReadCountEvent($blog));

        return response()->json([
            'status' => 'success',
            'blog' => $blog
        ]);
    }
}
