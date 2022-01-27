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
        $data['recent'] = Post::where('views', '>', 3)->take(5)->get();
        $data['right'] = Post::take(2)->inRandomOrder()->get();
        $data['title'] = 'Crypto news today';
        return view('blog.home', $data);
    }

    public function details($id){
        $post = Post::where('id', decrypt($id))->first();
        $data['post'] = Post::where('id', decrypt($id))->first();
        $data['latest'] = Post::latest()->take(5)->get();
        $data['similar'] = Post::where('category_id', $post->category->id)->take(5)->get();
        $data['title'] = 'News Details';
        $update = Post::where('id', $post->id)
                    ->update(['views' => ($post->views + 7)]);
        return view('blog.details', $data);
    }

    public function business(){
        $data['latest'] = Post::latest()->take(5)->get();
        $data['title'] = 'Business';
        return view('blog.business', $data);
    }

    public function brokers(){
        $data['latest'] = Post::latest()->take(5)->get();
        $data['title'] = 'Brokers';
        return view('blog.brokers.brokers', $data);
    }

    public function Invest(){
        $data['latest'] = Post::latest()->take(5)->get();
        $data['title'] = 'Trade';
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
        $data['title'] = 'Exchange';
        return view('blog.charts', $data);
    }
    public function Contact(){
        $data['title'] = 'contact';
        return view('blog.contact', $data);
    }

    public function About(){
        $data['title'] = 'About';
        return view('blog.about', $data);
    }

    public function Advertise(){
        $data['title'] = 'Advertise';
        return view('blog.advertise', $data);
    }

    public function AdvertiseMail(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'notes' => $request->notes,
            'subject' => 'Advert Reqeust'
        ];
        Mail::to($request->email)->send(new Advertise($data));
        Mail::to('danniejames1984@gmail.com')->send(new AdvertiseAdmin($data));
        Session::flash('message', 'Request sent Successfully');
        return back();
    }

    public function ContactUs(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'notes' => $request->notes,
            'subject' => 'Contact Us',
        ];
        Mail::to($request->email)->send(new Advertise($data));
        Mail::to('danniejames1984@gmail.com')->send(new AdvertiseAdmin($data));
        Session::flash('message', 'Request sent Successfully');
        return back();

    }
    



}
