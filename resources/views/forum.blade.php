@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach($discussion as $post)

                    <div class="card">
                        <div class="card-header float-left">
                            <b style="font-family: 'Comic Sans MS';font-size: large">{{$post->user->name}}</b>
                            <span class="float-right">
                                   <b>{{$post->created_at->diffForHumans()}}</b>
                            </span>
                        </div>
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: 'Yu Gothic UI'">{{$post->title}}</h3>
                                <p class="card-text"> {{str_limit($post->content,105)}}</p>
                                <a href="{{route('discussion',['slug' => $post->slug])}}" class="btn btn-info">View</a>
                            </div>
                           {{-- <div class="card-footer text-muted">
                                {{$post->replies->count()}} Replies
                            </div>--}}
                        </div>

                    </div>

                    <br><br>

                @endforeach



                {{--Page Links--}}
                <br>
                <hr>
                {{$discussion->links()}}

            </div>

        </div>
    </div>


@endsection
