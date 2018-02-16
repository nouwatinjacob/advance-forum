@extends('layouts.app')

@section('content')
    @foreach($discussions as $discussion)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="{{ $discussion->user->avatar }}" alt="" width="60px" height="60px">&nbsp;&nbsp;&nbsp;
                    <span>{{$discussion->user->name}}, <b>{{$discussion->created_at->diffForHumans()}}</b></span>
                    <a href="{{route('discussion', ['slug' => $discussion->slug])}}" class="btn btn-default pull-right">View</a>
                </div>
                <div class="panel-body">
                    <h4 class="text-center">{{$discussion->title}}</h4>
                    <p class="text-center">{{str_limit($discussion->content, 100)}}</p>
                </div>

                <div class="panel-footer">
                    <p>
                        {{$discussion->replies->count()}} Replies
                    </p>
                </div>
                
            </div>
         
     @endforeach  

     <div class="text-center">
            {{$discussions->links()}}
        </div> 

@endsection
