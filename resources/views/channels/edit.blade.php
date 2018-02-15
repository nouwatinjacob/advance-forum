@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Channel: {{$channel->title}}</div>

                <div class="panel-body">
                   <form action="{{ route('channels.update', ['channel' => $channel->id]) }}" method="POST">
                     {{csrf_field()}}
                     {{ method_field('PUT') }}

                     <div class="form-group">
                       
                       <input type="text" class="form-control" name="channel" value="{{$channel->title}}" placeholder="{{$channel->title}}">
                     </div>
                     <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Channel</button>
                     </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
