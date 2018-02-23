@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading text-center">Update Discussion</div>

                <div class="panel-body">
                    <form action="{{ route('discussion.update', ['id' => $discussion->id])}}" method="POST">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="content">Ask a question</label>
                        <textarea cols="30" rows="10" class="form-control" name="content" id="content">{{ $discussion->content }}</textarea>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit">Save Discussion Changes</button>
                      </div>
                    </form>
                </div>
            </div>
        
@endsection
