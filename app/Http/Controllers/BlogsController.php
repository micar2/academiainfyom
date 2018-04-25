<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Mini\Model\Post;

class BlogsController extends Controller
{
    public function index()
    {

        $posts = Posts::where('view', 'public')->get();
//        $categories = Posts
        return view('blog.index')->with('posts', $posts);
    }
}
