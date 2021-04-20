<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
class PostController extends Controller
{
    //belongs to using query builder and Eloquent
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


    // has many using query builder
    public function posts()
    {
        # code...
        $post = User::find(2)->post;
        // $post = DB::table('posts')
        // ->join('users','posts.user_id','users.id')
        // ->join('categories', 'posts.category_id','categories.id')
        // ->select('posts.*','users.name','categories.category_name')
        // ->where('user_id',2)
        // ->get();
        return view('post_by_user', compact('post'));
       // return response()->json($post);
    }
}
