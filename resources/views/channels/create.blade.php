@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Channel</div>

                <div class="panel-body">
                   <form action="{{ route('channels.store') }}" method="POST">
                     {{csrf_field()}}

                     <div class="form-group">
                       
                       <input type="text" class="form-control" name="channel" placeholder="Enter Channel name">
                     </div>
                     <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Save Channel</button>
                     </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
