<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Reply;

class DiscussionController extends Controller
{
    public function create()
    {
        return view('Discussion.create');
    }

    public function store(Request $request)
    {

        $this->validate(request(),[
            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);

        $dicussion =Discussion::create([
            'title'=> $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($request->title)
        ]);

        Session::flash('success','Discussion Successfully Created');
        return redirect()->route('discussion',['slug' => $dicussion->slug]);
    }

    public function show($slug)
    {

        return view('discussion.show')->with('post',Discussion::where('slug',$slug)->first());
    }

    public function reply($id,Request $request)
    {

        $discussion= Discussion::find($id);

        $reply= Reply::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id,
            'content' => \request('content')
        ]);


        Session::flash('success','Replied Successfully created');
        return redirect()->back();
    }



}
