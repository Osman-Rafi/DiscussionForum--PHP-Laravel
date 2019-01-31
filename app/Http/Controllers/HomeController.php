<?php

namespace App\Http\Controllers;

use App\Channels;
use Illuminate\Http\Request;
use App\Discussion;
use App\Replay;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discussion= Discussion::orderBy('created_at','desc')->paginate(3);
        return view('forum',['discussion' => $discussion]);
    }

    public function channel($slug)
    {
        $channel= Channels::where('slug',$slug)->first();
        //return $channel->discussions;
        return view('channel')->with('discussion',$channel->Discussions);
    }
}
