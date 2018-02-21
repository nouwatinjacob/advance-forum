@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ $discussion->user->avatar }}" alt="" width="60px" height="60px">&nbsp;&nbsp;&nbsp;
                <span>{{$discussion->user->name}}, <b>{{$discussion->created_at->diffForHumans()}}</b></span>
                @if($discussion->is_being_watched_by_auth_user())
                    <a href="{{route('discussion.unwatch', ['id' => $discussion->id])}}" class="btn btn-default btn-sm pull-right">UnWatch</a>
                @else
                    <a href="{{route('discussion.watch', ['id' => $discussion->id])}}" class="btn btn-default btn-sm pull-right">Watch</a>
                @endif
            </div>
            <div class="panel-body">
                <h4 class="text-center">{{$discussion->title}}</h4><hr>
                <p>{{$discussion->content}}</p><hr>
                @if($best_answer)
                <div class="text-center">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <img src="{{ $best_answer->user->avatar }}" alt="" width="35px" height="35px">&nbsp;&nbsp;&nbsp;
                            <span>{{$best_answer->user->name}}</span>
                        </div>
                        <div class="panel-body">
                            {{$best_answer->content}}
                        </div>
                    </div> 
                </div>                
                @endif
            </div>
            <div class="panel-footer">
               <span>
                  {{$discussion->replies->count()}} Replies
               </span>
               <a href="{{route('channel', ['slug' => $discussion->channel->slug])}}" class="pull-right btn btn-sm btn-default">{{$discussion->channel->title}}</a>
            </div>        
    </div>

    <h3>Replies</h3>
    @foreach($discussion->replies as $reply)
    <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ $reply->user->avatar }}" alt="" width="35px" height="35px">&nbsp;&nbsp;&nbsp;
                <span>{{$reply->user->name}}, <b>{{$reply->created_at->diffForHumans()}}</b></span>
                @if(!$best_answer)
                <a href="{{route('best.answer', ['id' => $reply->id])}}" class="btn btn-sm btn-info pull-right">mark as best answer</a>
                @endif
            </div>
            <div class="panel-body">               
                <p>{{$reply->content}}</p>
            </div> 

            <div class="panel-footer">                
                 @if($reply->is_liked_by_auth_user())
                    <a href="{{route('reply.unlike', ['id' => $reply->id])}}" class="btn btn-danger btn-sm">Unlike <span class="badge">{{$reply->likes->count()}}</span></a>
                 @else
                    <a href="{{route('reply.like', ['id' => $reply->id])}}" class="btn btn-success btn-sm">Like <span class="badge">{{$reply->likes->count()}}</span></a>
                 @endif
            </div>                 
    </div>

    @endforeach

   
    <div class="panel panel-default">
        <div class="panel-body">
            @if(Auth::check())
            <form action="{{route('discussion.reply', ['id' => $discussion->id]) }}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success pull-right">Leave a reply</button>
                </div>
            </form>
            @else
                <div class="text-center">
                    <h3>Sign in to Reply to this Discussion</h3>
                </div>                
            @endif
        </div>
    </div>
    
        
 @endsection
