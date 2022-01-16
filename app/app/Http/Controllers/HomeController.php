<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Mail\Advertise;
use Illuminate\Support\Facades\Session;
use App\Mail\AdvertiseAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
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
        $data['posts'] = Post::latest()->take(10)->get();
        $data['center'] = Post::latest()->take(3)->get();
        $data['right'] = Post::take(2)->inRandomOrder()->get();
        return view('blog.home', $data);
    }

    public function details($id){
        $post = Post::where('id', decrypt($id))->first();
        $data['post'] = Post::where('id', decrypt($id))->first();
        $data['latest'] = Post::latest()->take(5)->get();
        $data['similar'] = Post::where('category_id', $post->category->id)->take(5)->get();
        $update = Post::where('id', $post->id)
                    ->update(['views' => ($post->views + 10)]);
        return view('blog.details', $data);
    }

    public function business(){
        $data['latest'] = Post::latest()->take(5)->get();
        return view('blog.business', $data);
    }

    public function brokers(){
        $data['latest'] = Post::latest()->take(5)->get();
        return view('blog.brokers.brokers', $data);
    }

    public function Invest(){
        $data['latest'] = Post::latest()->take(5)->get();
        return view('blog.brokers.invest', $data);
    }

    public function Exchange(){
        $cURLConnection = curl_init();
        curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
        ));
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true); 
        $se = curl_exec($cURLConnection);
        curl_close($cURLConnection);  
        $data['coins'] = json_decode($se, true);
        return view('blog.charts', $data);
    }
    public function Contact(){
        return view('blog.contact');
    }

    public function About(){
        return view('blog.about');
    }

    public function Advertise(){
        return view('blog.advertise');
    }

    public function AdvertiseMail(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'notes' => $request->notes
        ];
        Mail::to($request->email)->send(new Advertise($data));
        Mail::to('danniejames1984@gmail.com')->send(new AdvertiseAdmin($data));
        Session::flash('message', 'Request sent Successfully');
        return back();
    }
    



}
