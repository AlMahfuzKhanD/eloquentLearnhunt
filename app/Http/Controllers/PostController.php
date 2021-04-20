<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController extends Controller
{
    //
    public function index()
    {
        $post = Post::all();
        // $post = DB::table('posts')
        // ->join('users', 'posts.user_id','users.id')
        // ->join('categories', 'posts.category_id','categories.id')
        // ->select('posts.*','users.name','categories.category_name')
        // ->get();
        return view('post', compact('post'));
    }
}
