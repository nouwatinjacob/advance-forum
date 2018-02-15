@extends('layouts.app')

@section('content')
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
                                    
                           <form action="{{ route('channels.destroy', ['channel' => $channel->id])}}" method="POST">
                              <a href="{{ route('channels.edit', ['channel' => $channel->id])}}" class="btn btn-xs btn-primary">Edit</a>
                              {{csrf_field()}}
                              {{ method_field('DELETE') }}
                              <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                           </form>                              
                          </td>                                                      
                          </tr>
                          @endforeach
                        @else 
                        <tr>
                          <th colspan=5 class="text-center">No Channels registered yet</th>      
                        </tr>                         
                      </tbody>
                      @endif
                    </table>
                </div>
            </div>
       
@endsection
