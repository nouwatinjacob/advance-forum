<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Reply;
use App\User;

class Like extends Model
{
    protected $fillable = [
        'user_id', 'reply_id'
    ];

    public function reply()
    {
        return $this->belongsTo('App\Reply');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
