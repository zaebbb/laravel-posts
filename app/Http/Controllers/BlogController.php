<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Posts::paginate(10);
        $categories = Category::all();

        return view('pages.index', [
            "posts" => $posts,
            "categories" => $categories
        ]);
    }

    public function getPost($article){
        $post = Posts::where("article", $article)->first();

        return view('pages.post', [
            "post" => $post
        ]);
    }

    public function getCategory($article){
        $category = Category::all();
        $current_category = Category::where("article", $article)->first();

        return view('pages.index', [
            "posts" => $current_category->posts()->paginate(10),
            "categories" => $category
        ]);
    }
}
