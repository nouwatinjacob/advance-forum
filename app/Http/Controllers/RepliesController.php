<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;
use Auth;
use App\Reply;
use Session;

class RepliesController extends Controller
{
    public function like($id) {
        
       $like = Like::create([
            'user_id' => Auth::id(),
            'reply_id' => $id
        ]);
        
        session()->flash('success', 'You just liked this reply' );

        return redirect()->back();
    }

    public function unlike($id)
    {
        
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();

        session()->flash('success', 'You just unliked this reply' );

        return redirect()->back();
    }

    public function best_answer($id)
    {
        $reply = Reply::find($id);

        $reply->best_answer = 1;
        $reply->save();

        $reply->user->points += 100;
        $reply->user->save();

        Session::flash('success', 'Reply as been marked as the best answer');

        return redirect()->back();
    }

    public function edit($id)
    {
        return view('replies.edit', ['reply' => Reply::find($id)]);
    }

    public function update($id)
    {
        $this->validate(request(), [
            'content' => 'required'
        ]);

        $reply = Reply::find($id);
        $reply->content = request()->content;
        $reply->save();

        Session::flash('success', 'Reply Updated successfully');

        return redirect()->route('discussion', ['slug' => $reply->discussion->slug]);
    }
}
