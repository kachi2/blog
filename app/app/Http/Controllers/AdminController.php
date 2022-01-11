<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Post;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }


    public function createBlog(){
        return view('admin.post.create');
    }


    public function storeBlog(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',

        ]);

        if($validate->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'The fields with * are required');
            return redirect()->back()->withErrors($validate)->withInput($request->all());
        }

        $blog = new Post;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->image('image', $blog);
        $blog->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Blog Posted Successfuly');
        return redirect()->back();
    }

    public function blogIndex(){
        $blogs = Post::latest()->simplePaginate('20');
        return view('admin.post.index', compact('blogs'));
    }

    public function editBlog($id){
        $dst = $this->decrypt($id);
        $blog = Post::where('id', $dst)->first();
        return view('admin.post.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id){
        $dst = $this->decrypt($id);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        if($validate->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'The fields with * are required');
            return redirect()->back()->withErrors($validate)->withInput($request->all());
    }

        $blog = Post::where('id', $dst)->first();
        $blog->title = $request->title;
        $blog->content = $request->content;
        if(isset($request->status)){
            $status = $request->status;
        }else{
            $status = 1;
        }
        $blog->status = $status;
        $blog->image('image', $blog);
        $blog->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Blog Updated Successfuly');
        return redirect()->back();
    }

    public function createSlider(){
        $category = Category::get();
        return view('admin.sliders.create', compact('category', $category));
    }

    public function storeSlider(Request $request){


    }

}
