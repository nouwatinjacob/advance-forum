<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;
use Auth;

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
}
