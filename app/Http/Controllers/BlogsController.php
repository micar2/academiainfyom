<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
=======
use App\Blog;
<<<<<<< HEAD
use App\Models\Categories;
=======
>>>>>>> master
>>>>>>> Stashed changes
use App\Models\Posts;
use Illuminate\Http\Request;
use Mini\Model\Post;

class BlogsController extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream

        $posts = Posts::where('view', 'public')->get();
//        $categories = Posts
        return view('blog.index')->with('posts', $posts);
=======
        $posts = Posts::where('view', 'public')->get();
<<<<<<< HEAD
        $menu = Blog::generateFirstMenu('categories');
        return view('blog.index', ['posts' => $posts, 'menu' => $menu]);
    }

    public function menu($id)
    {
        $posts = Posts::where('category','=', $id)->get();
        //$posts = Posts::where('category','=', $id)->join('categories as cF', [['posts.category', '=', 'cF.id']])->join('categories as cS', [[$id,'=','cS.category_id'],['cF.id' ,'=','cS.category_id']])->get();




        if($menu = Blog::generateSecondMenu('categories', $id)){
            if(count($menu)<=1){
                $menu= Categories::where('id','=',$id)->get();
            }
        }
        return view('blog.index', ['posts' => $posts, 'menu' => $menu]);
=======
//        $categories = Posts
        Blog::generateMenu('categories');
        return view('blog.index')->with('posts', $posts);
>>>>>>> master
>>>>>>> Stashed changes
    }
}
