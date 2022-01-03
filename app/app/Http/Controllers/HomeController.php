<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->take(10)->get();
        return view('blog.home', compact('posts', $posts));
    }

    public function details($id){
        $post = Post::where('id', decrypt($id))->first();
        $data['post'] = Post::where('id', decrypt($id))->first();
        $data['latest'] = Post::latest()->take(5)->get();
        $data['similar'] = Post::where('category_id', $post->category->id)->take(5)->get();
        return view('blog.details', $data);
    }


    public function business(){
        $data['latest'] = Post::latest()->take(5)->get();
        return view('blog.business', $data);
    }
}
