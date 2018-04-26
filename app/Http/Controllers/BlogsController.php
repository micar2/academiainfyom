<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Models\Posts;
use Illuminate\Http\Request;
use Mini\Model\Post;

class BlogsController extends Controller
{
    public function index()
    {

        $posts = Posts::where('view', 'public')->get();
//        $categories = Posts
        Blog::generateMenu('categories');
        return view('blog.index')->with('posts', $posts);
    }
}
