<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Discussion;
use App\Reply;

use Notification;

use Session;

class DiscussionsController extends Controller
{
    public function create()
    {
        return view('discussions.discuss');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
            'channel_id' => 'required',
        ]);

        $discussion = Discussion::create([
            'title' => request()->title,
            'content' => request()->content,
            'channel_id' => request()->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug(request()->title)
        ]);

        Session::flash('success', 'Discussion created');

        return redirect()->route('discussion', ['slug' => $discussion->slug]);
    }

    public function show($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();

        $best_answer = $discussion->replies()->where('best_answer', 1)->first();

        return view('discussions.show')->with('discussion', $discussion)
                                       ->with('best_answer', $best_answer);
    }

    public function reply($id)
    {
        $discussion = Discussion::find($id);

        
        $reply = Reply::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id,
            'content' => request()->reply
        ]);


        $watchers = array();

        foreach($discussion->watches as $watcher):
            array_push($watchers, User::find($watcher->user_id));
        endforeach;

        Notification::send($watchers, new \App\Notifications\NewReplyAdded($discussion));

        Session::flash('success', 'Replied to a Discussion');

        return redirect()->back();
    }
}
