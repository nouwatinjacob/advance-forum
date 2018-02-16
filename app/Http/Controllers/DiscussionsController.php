<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Discussion;

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

        return view('discussions.show')->with('discussion', $discussion);
    }
}
