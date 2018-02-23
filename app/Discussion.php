<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Discussion extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'channel_id', 'slug'
    ];

    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function watches()
    {
        return $this->hasMany('App\Watcher');
    }

    public function is_being_watched_by_auth_user()
    {
        $id = Auth::id();
           

        $watchers_id = array();

        foreach($this->watches as $watcher):
            array_push($watchers_id, $watcher->user_id);
        endforeach;
        
        if(in_array($id, $watchers_id))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function hasBestAnswer()
    {
        return $this->replies()->where('best_answer', true)->count() > 0;            
    } 

}
