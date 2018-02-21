<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Watcher;
use Session;
use Auth;

class WatchersController extends Controller
{
    public function watch($id)
    {
        Watcher::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id
        ]);       
       
        Session::flash('success', 'You have started watching this discussion');

        return redirect()->back();
    }

    public function unwatch($id)
    {
       $watcher = Watcher::where('discussion_id', $id)->where('user_id', Auth::id());

       $watcher->delete();

       Session::flash('success', 'You have stoped watching this discussion');

        return redirect()->back();
    }
}
