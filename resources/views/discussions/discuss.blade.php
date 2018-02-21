@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading text-center">Create a new Discussion</div>

                <div class="panel-body">
                    <form action="{{ route('discussions.store')}}" method="POST">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="title">Discussion Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title')}}" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="channel">Pick a Channel</label>
                        <select class="form-control" name="channel_id" id="channel_id">
                          @foreach($channels as $channel)
                            <option value="{{ $channel->id }}">{{ $channel->title }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="content">Ask a question</label>
                        <textarea cols="30" rows="10" class="form-control" name="content" id="content">{{ old('content')}}</textarea>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit">Save Discussion</button>
                      </div>
                    </form>
                </div>
            </div>
        
@endsection
