<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RepliesController extends Controller
{
    public function Like($id)
    {

        Like::create([
            'reply_id' => $id,
            'user_id' => Auth::id()
        ]);

        Session::flash('Success','You Liked the Reply');
        return redirect()->back();

    }

    public function Unlike($id)
    {
        $like=Like::where('reply_id',$id)->where('user_id',Auth::id())->first();
        $like->delete();

        Session::flash('Success','You UnLiked the Reply');
        return redirect()->back();
    }

    public function best_answer($id)
    {
        $reply=Reply::find($id);
        $reply->best_answer=1;

        $reply->save();

        Session::flash('success','You marked the answer as best answer');
        return redirect()->back();
    }
}
