@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create a Discussion</div>

        <div class="card-body">
            <form action="{{route('discussion.store')}}" method="post">
                {{csrf_field()}}

                <div class="form-gourp">

                    <label for="channel_id">Pick a Channel</label>
                    <select name="channel_id" id="channel_id" class="form-control">
                        @foreach($channels as $channel)
                            <option value="" disabled selected hidden>Please Choose...</option>
                            <option value="{{$channel->id}}">{{$channel->title}}</option>
                        @endforeach
                    </select>

                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">


                </div>
                <br>
                <div class="form-group">
                    <label for="content">Ask A Question</label>
                    <textarea name="content" id="content" cols="30" rows="10"
                              class="form-control" style="resize: none"></textarea>
                    <hr>
                    <button class="float-right btn btn-success " type="submit">Create A Discussion</button>

                </div>

            </form>
        </div>

    </div>
@endsection
