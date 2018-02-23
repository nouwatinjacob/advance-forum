<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Discussion;
use App\Channel;
use Auth;
use App\Reply;

class ForumsController extends Controller
{
    public function index()
    {

        switch(request('filter'))
        {
            case 'me':
                $results = Discussion::where('user_id', Auth::id())->paginate(3);
            break;

            case 'solved':
                $answered = Discussion::whereIn('id',
                Reply::where('best_answer', true)->pluck('discussion_id')->toArray()); 

                $results = $answered->paginate(3);
            break;

            case 'unsolved': 
                $unanswered = Discussion::whereNotIn('id',
                Reply::where('best_answer', true)->pluck('discussion_id')->toArray()); 

                $results = $unanswered->paginate(3);            
            break;

            default:
                $results = Discussion::orderBy('created_at', 'desc')->paginate(3);
            break;
        }
        return view('forum', ['discussions' => $results, 'filter' => request('filter')]);
    }

    public function channel($slug)
    {
        $channel = Channel::where('slug', $slug)->first();

        return view('channel')->with('discussions', $channel->discussions()->paginate(5));
    }
}
