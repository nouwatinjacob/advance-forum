@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading text-center">Update Reply</div>

                <div class="panel-body">
                    <form action="{{ route('reply.update', ['id' => $reply->id]) }}" method="POST">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="content">Reply a question</label>
                        <textarea cols="30" rows="10" class="form-control" name="content" id="content">{{ $reply->content }}</textarea>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit">Save Reply Changes</button>
                      </div>
                    </form>
                </div>
            </div>
        
@endsection
