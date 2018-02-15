@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Channels</div>

                <div class="panel-body">
                    <table class="table table-hover">
                      <thead>
                        <th>
                          Name
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      @if($channels->count() > 0)
                      <tbody>
                       
                          @foreach($channels as $channel)
                          <tr>
                          <td>{{ $channel->title }}</td>                          
                          <td>
                              <a href="{{ route('channels.edit', ['channel' => $channel->id])}}" class="btn btn-xs btn-primary">Edit</a>
                              <a href="{{ route('channels.destroy', ['channel' => $channel->id])}}" class="btn btn-xs btn-danger">Delete</a>
                          </td>                                                      
                          </tr>
                          @endforeach
                        @else 
                        <tr>
                          <th colspan=5 class="text-center">No Channels registered yet</th>                        </tr>
                        </tr>                         
                      </tbody>
                      @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
