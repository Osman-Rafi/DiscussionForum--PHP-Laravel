<?php

namespace App\Http\Controllers;

use App\Watcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WatchersController extends Controller
{
    public function watch($id)
    {
        Watcher::create([
            'discussion_id' => $id,
            'user_id' => Auth::id()
        ]);

        Session::flash('success','You are Watching this Discussion');

        return redirect()->back();
    }


    public function unwatch($id)
    {
        $watchers = Watcher::where('discussion_id',$id)->where('user_id',Auth::id());
        $watchers->delete();

        Session::flash('success','You are no Longer Watching this Discussion');
        return redirect()->back();
    }

}
