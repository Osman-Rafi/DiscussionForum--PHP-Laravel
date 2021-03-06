<?php

namespace App\Http\Controllers;

use App\Notifications\NewReplyAdded;
use Illuminate\Http\Request;
use App\Discussion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
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


        $notification = array(
            'message' => 'Discussion Successfully Created!',
            'alert-type' => 'success'
        );
        return redirect()->route('discussion',['slug' => $dicussion->slug])->with($notification);

        /*return Redirect::to('/')->with($notification);

        Session::flash('success','Discussion Successfully Created');
        return redirect()->route('discussion',['slug' => $dicussion->slug]);*/
    }

    public function show($slug)
    {
        $discussion=Discussion::where('slug',$slug)->first();
        $best_answer= $discussion->replies()->where('best_answer',1)->first();

        return view('discussion.show')->with('post',$discussion)->with('best_answer',$best_answer);
    }

    public function reply($id,Request $request)
    {
        $discussion= Discussion::find($id);

        $watchers=array();

        foreach ($discussion->watchers as $watcher)
        {
            array_push($watchers,User::find($watcher->user_id));
        }

        /*for email notification*/

        Notification::send($watchers,new \App\Notifications\NewReplyAdded($discussion));


        $reply= Reply::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id,
            'content' => \request('content')
        ]);

        $reply->user->points+=25;
        $reply->user->save();


        success('success','Replied Successfully created');
        return redirect()->back();
    }



}
