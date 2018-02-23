@extends('layouts.app')

@section('content')
    @foreach($discussions as $discussion)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="{{ $discussion->user->avatar }}" alt="" width="60px" height="60px">&nbsp;&nbsp;&nbsp;
                    <span>{{$discussion->user->name}}, <b>{{$discussion->created_at->diffForHumans()}}</b></span>
                    @if($discussion->hasBestAnswer())
                    <a class="btn btn-xs btn-success pull-right">CLOSED</a>
                    @else
                    <a class="btn btn-xs btn-danger pull-right" >OPEN</a>
                    @endif
                    <a href="{{route('discussion', ['slug' => $discussion->slug])}}" class="btn btn-default btn-xs pull-right" style="margin-right:5px">View</a>
                </div>
                <div class="panel-body">
                    <h4 class="text-center">{{$discussion->title}}</h4>
                    <p class="text-center">{{str_limit($discussion->content, 100)}}</p>
                </div>

                <div class="panel-footer">
                    <span>
                        {{$discussion->replies->count()}} Replies
                     </span>
                     <a href="{{route('channel', ['slug' => $discussion->channel->slug])}}" class="pull-right btn btn-sm btn-default">{{$discussion->channel->title}}</a>
                </div>
                
            </div>
         
     @endforeach  

     <div class="text-center">
            {{$discussions->links()}}
        </div> 

@endsection
