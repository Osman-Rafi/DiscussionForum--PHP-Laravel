@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">

            <div class="card">
                <div class="card-header float-left">
                    <img src="{{$post->user->avatar}}" alt="" width="70" height="70">
                    <b style="font-family: 'Comic Sans MS';font-size: large">{{strtoupper($post->user->name)}}
                        (Points: {{$post->user->points}})</b>
                    <span class="float-right">
                        <a class="badge badge-secondary"
                           href="{{route('channel',['slug'=> $post->channel->slug])}}">{{$post->channel->title}}</a>
                        <b>{{$post->created_at->diffForHumans()}}</b>

                        @if($post->is_being_watched_by_auth_user())

                            <a href="{{route('discussion.unwatch',['id' => $post->id])}}"
                               class="btn btn-danger btn-sm float-right">Unwatch  </a>

                        @else

                            <a href="{{route('discussion.watch',['id' => $post->id])}}"
                               class="btn btn-success btn-sm float-right">Watch</a>

                        @endif

                    </span>
                </div>

                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title" style="font-family: Impact">{{strtoupper($post->title)}}</h2>
                        <p class="card-text"> {{$post->content}}</p>
                    </div>


                    <br><br><br>


                    @if($best_answer)

                        {{--Best Answer Sectio Start--}}

                        <div class="card-footer text-muted">
                            <h2>Best Answer</h2>
                        </div>

                        <div class="card" style="padding: 40px">
                            <div class="card-header float-left alert alert-success">
                                <b style="font-family: 'Comic Sans MS';font-size: large"
                                   class="float-left">{{strtoupper($best_answer->user->name)}}
                                    (Points: {{$best_answer->user->points}}) </b>
                                <span class="float-right">
                                <b>{{$best_answer->created_at->diffForHumans()}}</b>
                            </span>
                            </div>
                            <div class="card text-center">
                                <div class="card-body">
                                    <h2 class="card-title"
                                        style="font-family: Impact">{{str_limit(strtoupper($best_answer->content),30)}}</h2>
                                    <p class="card-text"> {{$best_answer->content}}</p>
                                </div>
                            </div>

                        </div>

                    @endif

                    <br><br><br>

                    <div class="card-footer text-muted">
                        {{$post->replies->count()}} Replies
                    </div>
                </div>


            </div>


            {{--Replay Section--}}

            @foreach($post->replies as $r)

                <div class="col">
                    <div class="col">
                        <div class="col">
                            <br><br>
                            <div class="col-sm-offset-2 col-sm-8">
                                <div class="row justify-content-center">
                                    <div class="card">
                                        <div class="card-header float-left">
                                            <b style="font-family: 'Comic Sans MS';font-size: large">{{strtoupper($r->user->name)}}
                                                (Points: {{$r->user->points}})</b>
                                            <span class="float-right">
                                                <b>{{$r->created_at->diffForHumans()}}</b>
                                            </span>
                                        </div>
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="card-title"
                                                    style="font-family: Impact">{{str_limit(strtoupper($r->content),30)}}</h2>
                                                <p class="card-text"> {{$r->content}}</p>
                                            </div>
                                        </div>

                                        {{--Like Unlike Section--}}

                                        <div class="card-footer text-muted">
                                            @if($r->is_liked_by_auth_user())

                                                <a href="{{route('reply.unlike',['id' => $r->id])}}"
                                                   class="btn btn-danger btn-sm">Unlike <span
                                                            class="badge badge-light">{{$r->likes->count()}}</span></a>

                                            @else

                                                <a href="{{route('reply.like',['id' => $r->id])}}"
                                                   class="btn btn-success btn-sm">Like <span
                                                            class="badge badge-light">{{$r->likes->count()}}</span></a>

                                            @endif

                                            @if(!$best_answer)
                                                @if(Auth::id() == $post->user->id)
                                                    <a href="{{route('discussion.best.answer',['id' => $r->id])}}"
                                                       class="btn btn-sm btn-info float-right">Mark as Best answer</a>

                                                @endif
                                            @endif
                                        </div>

                                        {{--Like Unlike Section End--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br>
            @endforeach

            {{--Leave a Reply--}}

            <div class="panel panel-default">
                <div class="panel-body">

                    @if(Auth::check())
                        <form action="{{route('discussion.reply',['id' => $post->id]) }}" method="post">

                            {{csrf_field()}}

                            <label for="Reply">Leave a Reply for the Post</label>

                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea name="content" id="content" class="md-textarea form-control"
                                          rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn float-right">Leave a Reply</button>
                            </div>

                        </form>
                    @else
                        <div class="text-center">
                            <h2>Sign in to Leave a Reply</h2>
                        </div>
                    @endif

                </div>
            </div>

        </div>

    </div>

@endsection
