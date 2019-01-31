@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach($discussion as $post)

                    <div class="card">
                        <div class="card-header float-left">
                            <img src="{{$post->user->avatar}}" alt="" width="70" height="70">
                            <b style="font-family: 'Comic Sans MS';font-size: large">{{$post->user->name}}</b>
                            <span class="float-right">

                                   <b>{{$post->created_at->diffForHumans()}}</b>

                            </span>
                        </div>
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: 'Yu Gothic UI'">{{$post->title}}</h3>
                                <p class="card-text"> {{str_limit($post->content,105)}}</p>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <strong style="color: #686868">{{$post->Replies->count()}} Replies</strong>
                            <a href="{{route('discussion',['slug' => $post->slug])}}" class="btn btn-dark float-right">View</a>
                        </div>

                    </div>

                    <br><br>

                @endforeach



                {{--Page Links--}}
                <br>
                <hr>
               {{-- <div class="card text-center">
                    {{$discussion->links()}}
                </div>--}}
            </div>

        </div>
    </div>


@endsection
